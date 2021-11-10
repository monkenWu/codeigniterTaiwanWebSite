<?php

namespace App\Controllers;

use Github\Exception\ExceptionInterface;


class Home extends BaseController
{
    public function index()
    {
        if ( ! $info = cache('repo_info'))
		{
            $gitter = new \App\Libraries\GithubAPI();
            $info = $gitter->getRepoInfo('codeigniter4', 'CodeIgniter4');
            $ttl = 60 * 60 * 4; // time to live s/b 4 hours
            cache()->save('repo_info', $info, $ttl);
        }
        
        // Get the latest framework releases
        try {
            $data = [
                'html_url'         => $info['html_url'],
                'stargazers_count' => number_format($info['stargazers_count']),
                'forks_count'      => number_format($info['forks_count']),
            ];
        } catch (\Exception $e) {
            $data = [
                'html_url'         => 'https://github.com/codeigniter4/CodeIgniter4',
                'stargazers_count' => '',
                'forks_count'      => '',
            ];
        }

        echo $this->render('home', $data, '首頁');
    }
}

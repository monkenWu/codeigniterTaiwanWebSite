<?php

namespace App\Controllers;

use Github\Exception\ExceptionInterface;

class Download extends BaseController
{
    public function index()
    {

        $gitDatas = $this->gitter->fillReleaseInfo([]);


        // Get the latest framework releases
        try {
            $data = [
                'v3name' => $gitDatas['v3name'],
                'v4name' => $gitDatas['v4name'],
                'v3link' => empty($gitDatas['v3name'])
                ? 'https://github.com/bcit-ci/CodeIgniter/releases/'
                : 'https://github.com/bcit-ci/CodeIgniter/archive/' . $gitDatas['v3name'] . '.zip',
                'v4link' => empty($gitDatas['v4name'])
                ? 'https://github.com/codeigniter4/framework/releases/'
                : 'https://github.com/codeigniter4/framework/archive/' . $gitDatas['v4name'] . '.zip',
            ];
        } catch (\Exception $e) {
            $data = [
                'v3name' => '<em>unknown</em>',
                'v4name' => '<em>unknown</em>',
                'v3link' => 'https://github.com/bcit-ci/CodeIgniter/releases',
                'v4link' => 'https://github.com/codeigniter4/CodeIgniter4/releases',
            ];
        }

        echo $this->render('download', $data, '下載');
    }
}

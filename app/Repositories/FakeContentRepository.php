<?php
/**
 * Created by PhpStorm.
 * User: vnzac
 * Date: 3/8/2016
 * Time: 10:24 PM
 */

namespace App\Repositories;


use App\Models\FakeContent;

class FakeContentRepository extends BaseRepository
{

    public function __construct(FakeContent $faceContent)
    {
        $this->model = $faceContent;
    }

}
<?php

namespace App\Contracts\Interfaces;

use App\Contracts\Interfaces\Eloquent\DeleteInterface;
use App\Contracts\Interfaces\Eloquent\StoreInterface;
use App\Contracts\Interfaces\Eloquent\WhereClauseInterface;

interface NewsCategoryInterface extends StoreInterface, DeleteInterface, WhereClauseInterface
{
    public function deleteByNewsId($id);
    public function whereNews($id);
}

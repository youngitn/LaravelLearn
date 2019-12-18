<?php

namespace App\Http\Controllers;

use App\Services\InspiringService;
use Illuminate\Http\Request;

class InspiringController extends Controller
{
    /**
     * @return string
     */
    private $service;//弱型別 慶蔡
    //依賴注入 框架幫你做好 只需在建構式中注入 記得import use App\Services\InspiringService
    //如此在單元測試時可使用mock來假裝inspiringService.
    public function __construct(InspiringService $inspiringService)
    {
        $this->service = $inspiringService;
    }
    public function inspire()
    {
        return $this->service->inspire();
    }
}


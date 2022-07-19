<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderStoreRequest;
use App\Http\Requests\OrderUpdateRequest;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    
    /**
     * Метод для вывода заказа
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return Order::find($id);
    }

    /**
     * Метод для добавления заказа
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderStoreRequest $request)
    {
        return Order::create(
            $request->all()
        );
    }

    /**
     * Метод для обновления заказа
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(OrderUpdateRequest $request, $id)
    {
        $order = Order::find($id);

        $order->update($request->all());

        return $order;
    }

}

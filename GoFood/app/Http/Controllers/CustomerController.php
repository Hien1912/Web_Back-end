<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session_start();
        $customers = [
            1 => [
                'id' => 1,
                'hovaten' => 'Nguyễn Văn A',
                'sodienthoai' => '0123456789',
                'email' => 'test@email.com'
            ],
            [
                'id' => 2,
                'hovaten' => 'Nguyễn Văn B',
                'sodienthoai' => '0123456789',
                'email' => 'test@email.com'
            ],
            [
                'id' => 3,
                'hovaten' => 'Nguyễn Văn C',
                'sodienthoai' => '0123456789',
                'email' => 'test@email.com'
            ],
            [
                'id' => 4,
                'hovaten' => 'Nguyễn Văn D',
                'sodienthoai' => '0123456789',
                'email' => 'test@email.com'
            ]
        ];
        if (!isset($_SESSION['customers'])) {
            $_SESSION['customers'] = $customers;
        }

        return view("modules.customer.index", ['customers' => $_SESSION['customers']]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("modules.customer.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        session_start();
        $_SESSION['customers'][] = [
            'id' => count($_SESSION['customers']) + 1,
            'hovaten' => $_POST['hovaten'],
            'sodienthoai' => $_POST['sodienthoai'],
            'email' => $_POST['email']
        ];
        return view('modules.customer.index', ['customers' => $_SESSION['customers']]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        session_start();
        return view('modules.customer.show', ['customer' => $_SESSION['customers'][$id]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        session_start();
        return view('modules.customer.edit', ['customer' => $_SESSION['customers'][$id], 'id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        session_start();
        $_SESSION['customers'][$id] = [
            'id' => $id,
            'hovaten' => $_POST['hovaten'],
            'sodienthoai' => $_POST['sodienthoai'],
            'email' => $_POST['email']
        ];
        return view('modules.customer.index', ['customers' => $_SESSION['customers']]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        session_start();
        unset($_SESSION['customer'][$id]);
        return view('modules.customer.index', ['customers' => $_SESSION['customers']]);
    }
}

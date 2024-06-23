<?php

namespace App\Http\Controllers\Purchase;

use App\Http\Controllers\Controller;
use App\Models\Purchase\Purchase;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Rklab\Crud\Http\Controllers\Config\CrudConfig;

class PurchaseController extends Controller
{
    /**
    * @return View
    */
    public function index(): View
    {
        $itemsPerPage = $this->getItemsPerPage();

        $purchases = Purchase::paginate($itemsPerPage);

        return view('Purchase.index')->with('purchases', $purchases);
    }

    /**
    * @return View
    */
    public function create(): View
    {
        return view('Purchase.form');
    }

    /**
    * @param Request $request
    *
    * @return RedirectResponse
    */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
'price' => 'required|numeric|min:1|max:2147483647',
'name' => 'required|max:255',
'desc' => 'nullable|min:10|max:2000',
'date' => 'required|date',
]);

        Purchase::create($request->all());

        return redirect()->route('purchases.index')->with('success','Successfully added a new Purchase.');
    }

    /**
    * @param Purchase $purchase
    *
    * @return View
    */
    public function show(Purchase $purchase): View
    {
        return view('Purchase.show', compact('purchase'));
    }

    /**
    * @param Purchase $purchase
    *
    * @return View
    */
    public function edit(Purchase $purchase): View
    {
        return view('Purchase.form', compact('purchase'));
    }

    /**
    * @param Purchase $purchase
    *
    * @return RedirectResponse
    */
    public function update(Request $request, Purchase $purchase): RedirectResponse
    {
        $this->validate($request, [
'price' => 'required|numeric|min:1|max:2147483647',
'name' => 'required|max:255',
'desc' => 'nullable|min:10|max:2000',
'date' => 'required|date',
]);

        $purchase->update($request->all());

        return redirect()->route('purchases.index');
    }

    /**
    * @param Purchase $purchase
    *
    * @return RedirectResponse
    */
    public function destroy(Purchase $purchase): RedirectResponse
    {
        $purchase->delete();

        return redirect()->route('purchases.index');
    }

    /**
    * @return int
    */
    private function getItemsPerPage(): int
    {
        return (new CrudConfig())
        ->getCrudElementPagination();
    }
}

<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Tenant;

class tenantController extends Controller
{
    //
    public function addTenant(Request $request)
    {
        $addTenant = new Tenant;

        $addTenant->Fullname = $request->Fullname;
        $addTenant->Nationality = $request->Nationality;

        $TenantIDCard = $request->NationalID;
        $tenantID = time(). '' . $TenantIDCard->getClientOriginalExtension();
        $request->NationalID->move('NationaID', $tenantID);
        $addTenant->NationalID = $tenantID;
        

        $TenantTA = $request->TenancyAgreement;
        $tenantSTA = time(). '' . $TenantTA->getClientOriginalExtension();
        $request->TenancyAgreement->move('TenancyAgreement', $tenantSTA);
        $addTenant->TenancyAgreement = $tenantSTA;
        
        

        $addTenant->TenantPhonenumber = $request->TenantPhonenumber;
        $addTenant->TenantDOB = $request->TenantDOB;
        $addTenant->TenantEmail = $request->TenantEmail;
        $addTenant->TenantEntryDate = $request->TenantEntryDate;
        $addTenant->TenantDepatureDate = $request->TenantDepatureDate;

        $addTenant->save();

        return redirect()->back();
    }

    public function viewTenant()
    {
        //selecting all tenant infomation
        $tenantInfo = Tenant::all();

        return view('tenants.viewTenant', compact('tenantInfo'));
    }
}

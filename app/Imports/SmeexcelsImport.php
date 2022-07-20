<?php

namespace App\Imports;

use App\Models\Smeexcel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class SmeexcelsImport implements ToCollection,WithHeadingRow,WithValidation
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach($rows as $row){
            $data=[
                'datesubmitted'=>$row['datesubmitted'],
                'companyfullname'=>$row['companyfullname'],
                'companyaddress'=>$row['companyaddress'],
                'postcode'=>$row['postcode'],
                'city'=>$row['city'],
                'state'=>$row['state'],
                'name'=>$row['name'],
                'mobileno'=>$row['mobileno'],
                'email'=>$row['email'],
                'geography'=>$row['geography'],
                'inwhichsectorsdoesyourcompanymainlyinvolved'=>$row['in_which_sectors_does_your_company_mainly_involved'],
                'couldyougiveindetailthesubsectorsofthebusiness'=>$row['could_you_give_in_detail_the_subsectors_of_the_business'],
                'inwhichGovernmentAgenciesdoesthecompanyhasmainlyattachedto'=>$row['in_which_government_agencies_does_the_company_has_mainly_attached_to'],
                'othersagencies'=>$row['othersagencies'],
                'b1'=>$row['b1'],
                'b2'=>$row['b2'],
                'b3'=>$row['b3'],
                'b4'=>$row['b4'],
                'b5'=>$row['b5'],
                'b6'=>$row['b6'],
                'b7'=>$row['b7'],
                'c8'=>$row['c8'],
                'c9'=>$row['c9'],
                'c10'=>$row['c10'],
                'c11'=>$row['c11'],
                'c12'=>$row['c12'],
                'c13'=>$row['c13'],
                'c14'=>$row['c14'],
                'c15'=>$row['c15'],
                'c16'=>$row['c16'],
                'c17'=>$row['c17'],
                'c18'=>$row['c18'],
                'c19'=>$row['c19'],
                'c20'=>$row['c20'],
                'c21'=>$row['c21'],
                'c22'=>$row['c22'],
                'c23'=>$row['c23'],
                'd24'=>$row['d24'],
                'd25'=>$row['d25'],
                'd26'=>$row['d26'],
                'd27'=>$row['d27'],
                'othersagencies26'=>$row['othersagencies26'],
                'd28'=>$row['d28'],
                'd29'=>$row['d29'],
                'd30'=>$row['d30'],
                'd31'=>$row['d31'],
                'finaltier'=>$row['finaltier'],
                'earlymanualsmecategory'=>$row['earlymanualsmecategory'],
                'earlystatus'=>$row['earlystatus'],
                'remarks'=>$row['remarks']
                
            ];
            Smeexcel::create($data);
        }
    }

    public function rules(): array
    {
        return[
            'datesubmitted',
            'companyfullname',
            'companyaddress',
            'postcode',
            'city',
            'state',
            'name',
            'mobileno',
            'email',
            'geography',
            'in_which_sectors_does_your_company_mainly_involved',
            'could_you_give_in_detail_the_subsectors_of_the_business',
            'in_which_Government_Agencies_does_the_company_has_mainly_attached_to',
            'othersAgencies',
            'b1',
            'b2',
            'b3',
            'b4',
            'b5',
            'b6',
            'b7',
            'c8',
            'c9',
            'c10',
            'c11',
            'c12',
            'c13',
            'c14',
            'c15',
            'c16',
            'c17',
            'c18',
            'c19',
            'c20',
            'c21',
            'c22',
            'c23',
            'd24',
            'd25',
            'd26',
            'd27',
            'othersAgencies26',
            'd28',
            'd29',
            'd30',
            'd31',
            'finalTier',
            'earlyManualSmeCategory',
            'earlyStatus',
            'remarks'
        ];
    }
}
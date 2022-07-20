@extends('dashboards.admins.layouts.main')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12 p-4">
            <div class="card-body overflow-hidden shadow-lg">]
                <table class="table table-striped">
                
                    <tr>
                        <th>Company Name</th>
                        <td>{{ $smeexcel->companyfullname }}</td>
                    </tr>
                    <tr>
                        <th>Company Address</th>
                        <td>{{ $smeexcel->companyaddress }}</td>
                    </tr>
                    <tr>
                        <th>Postcode </th>
                        <td>{{ $smeexcel->postcode }}</td>
                    </tr>
                    <tr>
                        <th>City </th>
                        <td>{{ $smeexcel->city }}</td>
                    </tr>
                    <tr>
                        <th>State </th>
                        <td>{{ $smeexcel->state }}</td>
                    </tr>
                    <tr>
                        <th>Contact Person </th>
                        <td>{{ $smeexcel->name }}</td>
                    </tr>
                    <tr>
                        <th>Mobile Phone</th>
                        <td>{{ $smeexcel->mobileno }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $smeexcel->email }}</td>
                    </tr>
                    <tr>
                        <th>Geography - The location of majority of people who use your company's IT facilities for business operations</th>
                        <td>{{ $smeexcel->geography }}</td>
                    </tr>
                    <tr>
                        <th>In which sectors does your company mainly involved?</th>
                        <td>{{ $smeexcel->inwhichsectorsdoesyourcompanymainlyinvolved }}</td>
                    </tr>
                    <tr>
                        <th>Could you give in detail the subsectors of the business?</th>
                        <td>{{ $smeexcel->couldyougiveindetailthesubsectorsofthebusiness }}</td>
                    </tr>
                    <tr>
                        <th>In which Government Agencies does the company has mainly attached to</th>
                        <td>{{ $smeexcel->inwhichGovernmentAgenciesdoesthecompanyhasmainlyattachedto }}</td>
                    </tr>
                    <tr>
                        <th>How many of employee in your company (full-time)</th>
                        <td>{{ $smeexcel->b1 }}</td>
                    </tr>
                    <tr>
                        <th>How many of employee as free lancers</th>
                        <td>{{ $smeexcel->b2 }}</td>
                    </tr>
                    <tr>
                        <th>How many of employee, Full-time and free lancers who have access to the company’s IT facilities and use them on daily operation</th>
                        <td>{{ $smeexcel->b3 }}</td>
                    </tr>
                    <tr>
                        <th>What is your yearly turnover average, in the last 3 years? (RM)</th>
                        <td>{{ $smeexcel->b4 }}</td>
                    </tr>
                    <tr>
                        <th>How much does the company spent and invest in ICT for the past 5 years? </th>
                        <td>{{ $smeexcel->b5 }}</td>
                    </tr>
                    <tr>
                        <th>In relation to question above, in which area does your company spent and invest in ICT for the past 5 years?</th>
                        <td>{{ $smeexcel->b6 }}</td>
                    </tr>
                    <tr>
                        <th>What is the company paid up capital?</th>
                        <td>{{ $smeexcel->b7 }}</td>
                    </tr>
                    <tr>
                        <th>Any plan to upgrade the company’s ICT in 3 years from now?</th>
                        <td>{{ $smeexcel->c8 }}</td>
                    </tr>
                    <tr>
                        <th>In which area does the company is planning to upgrade its ICT in 3 years from now?</th>
                        <td>{{ $smeexcel->c9 }}</td>
                    </tr>
                    <tr>
                        <th>In what aspect do you know the importance of the cybersecurity the most?</th>
                        <td>{{ $smeexcel->c10 }}</td>
                    </tr>
                    <tr>
                        <th>Do you have physical infra, could you list down the main components used in your company?</th>
                        <td>{{ $smeexcel->c11 }}</td>
                    </tr>
                    <tr>
                        <th>To join PGPKS, the company need to expose their internal IPs / network to CYBERSECURITY MALAYSIA or its associate. Are you willing to expose your network for the VAPT / CMERP purposes?</th>
                        <td>{{ $smeexcel->c12 }}</td>
                    </tr>
                    <tr>
                        <th>How many in the company is connected to the company's internet, ICT device inclusive their own device for company's daily operation and personal use? (Average per day)</th>
                        <td>{{ $smeexcel->c13 }}</td>
                    </tr>
                    <tr>
                        <th>Have your company encounter any cyber threat before such as wire transfer fraud or ransomware?</th>
                        <td>{{ $smeexcel->c14 }}</td>
                    </tr>
                    <tr>
                        <th>Are your information security and business priorities aligned?</th>
                        <td>{{ $smeexcel->c15 }}</td>
                    </tr>
                    <tr>
                        <th> Are you aware on the importance of cyber security in your business?</th>
                        <td>{{ $smeexcel->c16 }}</td>
                    </tr>
                    <tr>
                        <th>Do you feel that it is important to have cybersecurity in your business?</th>
                        <td>{{ $smeexcel->c17 }}</td>
                    </tr>
                    <tr>
                        <th>Investing in cyber security for your company is expensive but crucial to the company</th>
                        <td>{{ $smeexcel->c18 }}</td>
                    </tr>
                    <tr>
                        <th>Allocating a yearly budget for cyber security as part of ICT maintenance is critical for the organisation as part of its regular expenses</th>
                        <td>{{ $smeexcel->c19 }}</td>
                    </tr>
                    <tr>
                        <th>Investing in cybersecurity for your company is a waste of time and money</th>
                        <td>{{ $smeexcel->c20 }}</td>
                    </tr>
                    <tr>
                        <th>How do you envision your company's automation system in 5 years?</th>
                        <td>{{ $smeexcel->c21 }}</td>
                    </tr>
                    <tr>
                        <th>From 1 to 5, how would you rate your company's cyber security, including processes, infrastructure/software, and human readiness?</th>
                        <td>{{ $smeexcel->c22 }}</td>
                    </tr>
                    <tr>
                        <th>How important do you believe cyber security in your company’s day-to-day operations?</th>
                        <td>{{ $smeexcel->c23 }}</td>
                    </tr>
                    <tr>
                        <th>Do you have a dedicated IT officer or someone who acts as an IT officer in your organisation? Is he/she easily accessible?</th>
                        <td>{{ $smeexcel->d24 }}</td>
                    </tr>
                    <tr>
                        <th>Do you rely on the IT vendor for ICT services in your company's day-to-day operations? For instance, to backup, shut down the server, configure the system, and so on</th>
                        <td>{{ $smeexcel->d25 }}</td>
                    </tr>
                    <tr>
                        <th>If the abovementioned question is answered 'Yes', would you be able to ensure that the vendor is available for the PGPKS exercise in a timely manner (within a week)?</th>
                        <td>{{ $smeexcel->d26 }}</td>
                    </tr>
                    <tr>
                        <th>Are you currently involve in any Cyber Security campaign run by other agencies (MDEC, SME Corp, MITI, etc)
                        </th>
                        <td>{{ $smeexcel->d27 }}</td>
                    </tr>
                    <tr>
                        <th>Are you currently involve in any Cyber Security campaign run by other agencies (MDEC, SME Corp, MITI, etc)
                        </th>
                        <td>{{ $smeexcel->othersagencies26 }}</td>
                    </tr>
                    <tr>
                        <th>In your view and experience, do you believe CyberSecurity Malaysia is capable of assisting you in managing your company's cyber security?</th>
                        <td>{{ $smeexcel->d28 }}</td>
                    </tr>
                    <tr>
                        <th>Does anyone in the company has certification or expertise in Information Security and Risk Management?</th>
                        <td>{{ $smeexcel->d29 }}</td>
                    </tr>
                    <tr>
                        <th>Can you detect any attempted or successful cyber security incident, brute force assault, or data breach performed against your company?</th>
                        <td>{{ $smeexcel->d30 }}</td>
                    </tr>
                    <tr>
                        <th>Are the employees in the company being appropriately trained on cybersecurity, especially those who use the company’s IT facility on daily basis?</th>
                        <td>{{ $smeexcel->d31 }}</td>
                    </tr>
                </table>

                <div class="row">
                    <div class="update ml-auto mr-auto text-end">
                        <a class="btn btn-secondary" href="{{ route('smeexcels.index') }}">Back</a>
                    </div>
                </div>
           
            </div>
        </div>
    </div>
</div>

@endsection
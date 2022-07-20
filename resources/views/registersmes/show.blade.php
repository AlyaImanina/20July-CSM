@extends('dashboards.admins.layouts.main')

@section('content')



<div class="content">
    <div class="row">
        <div class="col-md-12 p-4">
            <div class="card-body overflow-hidden shadow-lg">
                    {{-- <h4 class="card-title text-center">Company Detail</h4><br> --}}
                <table class="table table-striped">
                    <tr>
                        <th>Company Name</th>
                        <td>{{ $registersme->companyfullname }}</td>
                    </tr>
                    <tr>
                        <th>Company Address</th>
                        <td>{{ $registersme->companyaddress }}</td>
                    </tr>
                    <tr>
                        <th>Postcode </th>
                        <td>{{ $registersme->postcode }}</td>
                    </tr>
                    <tr>
                        <th>City </th>
                        <td>{{ $registersme->city }}</td>
                    </tr>
                    <tr>
                        <th>State </th>
                        <td>{{ $registersme->state }}</td>
                    </tr>
                    <tr>
                        <th>Contact Person </th>
                        <td>{{ $registersme->name }}</td>
                    </tr>
                    <tr>
                        <th>Mobile Phone</th>
                        <td>{{ $registersme->mobileno }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $registersme->email }}</td>
                    </tr>
                    <tr>
                        <th>Geography - The location of majority of people who use your company's IT facilities for business operations</th>
                        <td>{{ $registersme->geography }}</td>
                    </tr>
                    <tr>
                        <th>In which sectors does your company mainly involved?</th>
                        <td>{{ $registersme->inwhichsectorsdoesyourcompanymainlyinvolved }}</td>
                    </tr>
                    <tr>
                        <th>Could you give in detail the subsectors of the business?</th>
                        <td>{{ $registersme->couldyougiveindetailthesubsectorsofthebusiness }}</td>
                    </tr>
                    <tr>
                        <th>In which Government Agencies does the company has mainly attached to</th>
                        <td>{{ $registersme->inwhichGovernmentAgenciesdoesthecompanyhasmainlyattachedto }}</td>
                    </tr>
                    <tr>
                        <th>How many of employee in your company (full-time)</th>
                        <td>{{ $registersme->b1 }}</td>
                    </tr>
                    <tr>
                        <th>How many of employee as free lancers</th>
                        <td>{{ $registersme->b2 }}</td>
                    </tr>
                    <tr>
                        <th>How many of employee, Full-time and free lancers who have access to the company’s IT facilities and use them on daily operation</th>
                        <td>{{ $registersme->b3 }}</td>
                    </tr>
                    <tr>
                        <th>What is your yearly turnover average, in the last 3 years? (RM)</th>
                        <td>{{ $registersme->b4 }}</td>
                    </tr>
                    <tr>
                        <th>How much does the company spent and invest in ICT for the past 5 years? </th>
                        <td>{{ $registersme->b5 }}</td>
                    </tr>
                    <tr>
                        <th>In relation to question above, in which area does your company spent and invest in ICT for the past 5 years?</th>
                        <td>{{ $registersme->b6 }}</td>
                    </tr>
                    <tr>
                        <th>What is the company paid up capital?</th>
                        <td>{{ $registersme->b7 }}</td>
                    </tr>
                    <tr>
                        <th>Any plan to upgrade the company’s ICT in 3 years from now?</th>
                        <td>{{ $registersme->c8 }}</td>
                    </tr>
                    <tr>
                        <th>In which area does the company is planning to upgrade its ICT in 3 years from now?</th>
                        <td>{{ $registersme->c9 }}</td>
                    </tr>
                    <tr>
                        <th>In what aspect do you know the importance of the cybersecurity the most?</th>
                        <td>{{ $registersme->c10 }}</td>
                    </tr>
                    <tr>
                        <th>Do you have physical infra, could you list down the main components used in your company?</th>
                        <td>{{ $registersme->c11 }}</td>
                    </tr>
                    <tr>
                        <th>To join PGPKS, the company need to expose their internal IPs / network to CYBERSECURITY MALAYSIA or its associate. Are you willing to expose your network for the VAPT / CMERP purposes?</th>
                        <td>{{ $registersme->c12 }}</td>
                    </tr>
                    <tr>
                        <th>How many in the company is connected to the company's internet, ICT device inclusive their own device for company's daily operation and personal use? (Average per day)</th>
                        <td>{{ $registersme->c13 }}</td>
                    </tr>
                    <tr>
                        <th>Have your company encounter any cyber threat before such as wire transfer fraud or ransomware?</th>
                        <td>{{ $registersme->c14 }}</td>
                    </tr>
                    <tr>
                        <th>Are your information security and business priorities aligned?</th>
                        <td>{{ $registersme->c15 }}</td>
                    </tr>
                    <tr>
                        <th> Are you aware on the importance of cyber security in your business?</th>
                        <td>{{ $registersme->c16 }}</td>
                    </tr>
                    <tr>
                        <th>Do you feel that it is important to have cybersecurity in your business?</th>
                        <td>{{ $registersme->c17 }}</td>
                    </tr>
                    <tr>
                        <th>Investing in cyber security for your company is expensive but crucial to the company</th>
                        <td>{{ $registersme->c18 }}</td>
                    </tr>
                    <tr>
                        <th>Allocating a yearly budget for cyber security as part of ICT maintenance is critical for the organisation as part of its regular expenses</th>
                        <td>{{ $registersme->c19 }}</td>
                    </tr>
                    <tr>
                        <th>Investing in cybersecurity for your company is a waste of time and money</th>
                        <td>{{ $registersme->c20 }}</td>
                    </tr>
                    <tr>
                        <th>How do you envision your company's automation system in 5 years?</th>
                        <td>{{ $registersme->c21 }}</td>
                    </tr>
                    <tr>
                        <th>From 1 to 5, how would you rate your company's cyber security, including processes, infrastructure/software, and human readiness?</th>
                        <td>{{ $registersme->c22 }}</td>
                    </tr>
                    <tr>
                        <th>How important do you believe cyber security in your company’s day-to-day operations?</th>
                        <td>{{ $registersme->c23 }}</td>
                    </tr>
                    <tr>
                        <th>Do you have a dedicated IT officer or someone who acts as an IT officer in your organisation? Is he/she easily accessible?</th>
                        <td>{{ $registersme->d24 }}</td>
                    </tr>
                    <tr>
                        <th>Do you rely on the IT vendor for ICT services in your company's day-to-day operations? For instance, to backup, shut down the server, configure the system, and so on</th>
                        <td>{{ $registersme->d25 }}</td>
                    </tr>
                    <tr>
                        <th>If the abovementioned question is answered 'Yes', would you be able to ensure that the vendor is available for the PGPKS exercise in a timely manner (within a week)?</th>
                        <td>{{ $registersme->d26 }}</td>
                    </tr>
                    <tr>
                        <th>Are you currently involve in any Cyber Security campaign run by other agencies (MDEC, SME Corp, MITI, etc)
                        </th>
                        <td>{{ $registersme->d27 }}</td>
                    </tr>
                    <tr>
                        <th>Are you currently involve in any Cyber Security campaign run by other agencies (MDEC, SME Corp, MITI, etc)
                        </th>
                        <td>{{ $registersme->othersagencies26 }}</td>
                    </tr>
                    <tr>
                        <th>In your view and experience, do you believe CyberSecurity Malaysia is capable of assisting you in managing your company's cyber security?</th>
                        <td>{{ $registersme->d28 }}</td>
                    </tr>
                    <tr>
                        <th>Does anyone in the company has certification or expertise in Information Security and Risk Management?</th>
                        <td>{{ $registersme->d29 }}</td>
                    </tr>
                    <tr>
                        <th>Can you detect any attempted or successful cyber security incident, brute force assault, or data breach performed against your company?</th>
                        <td>{{ $registersme->d30 }}</td>
                    </tr>
                    <tr>
                        <th>Are the employees in the company being appropriately trained on cybersecurity, especially those who use the company’s IT facility on daily basis?</th>
                        <td>{{ $registersme->d31 }}</td>
                    </tr>
                    
                </table>

                <div class="row">
                    <div class="update ml-auto mr-auto text-end">
                        <a class="btn btn-secondary" href="{{ route('registersmes.index') }}">Back</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
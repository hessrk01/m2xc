@extends('layouts.welcome')

@section('content')

<section id="success" class="section">
        <div class="container">
            <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-12 col-12">
                        <div class="section-title">
                                <h3>Success Stories</h3>
                                
                                <p>The following list highlights some of our projects and success stories.  Please contact us directly for more information on any specific items.</p>
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-12">
                    <img src="{{ asset('img/success/clerk.jpg') }}" class="success" alt="">
                </div>
                <div class="offset-lg-3 col-lg-6 col-sm-12">
                    <h5>Local County Government Systems</h5>
                    Selection and implementation of system solutions covering Financial Reporting & ERP, Jail Management, Road and Bridge, Records Management, Land and Vital Records, Court Case and Justice Management, Jury Selection and Supervision.
                </div>
            </div>
            <div class="row my-5">
                <div class="col-lg-4 col-sm-12 my-2">
                    <h5>County Clerk</h5>
                    <h6>Interim Department Management</h6>
                    Assumed a pivotal role in the transition between Clerks, assessing and recommending a series of projects to increase controls, resolve staffing issues and streamline processes and efficiency.  Resulting projects included successful implementation of Land Records system, central cashiering and receipting, collections, elections software management, budget development, open records management alongside day to day departmental management.
                </div>
                <div class="col-lg-4 col-sm-12 my-2">
                    <h5>District Clerk</h5>
                    <h6>Departmental Efficiency Analysis</h6>
                    Assessed workflows, volumes and controls in the Department.  Resulting recommendations resulted in the implementation of a redesigned customer focused website, phone tree to deal with pro-se, redesigned office layout, organizational responsibility redesign and a series of recommendation system changes to remove inefficiencies and increase controls.
                </div>
                <div class="col-lg-4 col-sm-12 my-2">
                    <h5>Indigent Defense</h5>
                    Assessed the compliance of documented and existing processes against Senate Bill 7 and document indigent defense plan.  Resulting recommendations covered processes across arrest, jail, attorneys, court appointment, defendant contact, attorney fees and payment.  Recommendations identified potential savings of >$500,000 and >95% compliance with required measures and deadlines.
                </div>                
            </div>

            <div class="row my-5">
                <div class="col-lg-4 col-sm-12 my-2">
                    <h5>County Auditor</h5>
                    Redesigned Chart of Accounts and business processes to ensure compliance with new GASB34 requirements on governmental reporting.  Completed fixed asset audits, revaluations, managed road & bridge assessment and ongoing condition monitoring process and redesigned all financial flows to ensure data was captured to enable reporting under new formats.
                </div>
                <div class="col-lg-4 col-sm-12">
                        {{-- <div class="col-lg-3 col-sm-12"> --}}
                    <img src="{{ asset('img/success/school.jpg') }}" class="success-col" alt="">
                </div>
                <div class="col-lg-4 col-sm-12 my-2">
                    <h5>School District</h5>
                    Managed the implementation of ERP solution to meet business and reporting requirements.
                    <h5 class="mt-3">Private School District</h5>
                    Managed a portfolio of projects relating to Financial Aid, Student Selection, IT Management, IT Strategy, document scanning and management, ERP usage and others for this large private school district.
                </div>
            </div>
            <div class="row my-5">
                <div class="col-lg-4 col-sm-12 my-2">
                    <h5>Local County Government Leadership</h5>
                    Interim Department management transitioning retiring IT Director and taking full ownership of Department, Staff, Strategy, Budget and Operations over a 9 month transition and search to find a permanent Director.
                </div>
                <div class="col-lg-4 col-sm-12 my-2">
                    <h5>Indigent Defense – Attorney improvement</h5>
                    Built a program and plan to improve the quality of defense to indigents and indigents with Mental Health issues.  The program developed will cover multiple agencies and local partners to improve the level of understanding and defense given to this at risk group.
                </div>
                <div class="col-lg-4 col-sm-12 my-2">
                    <h5>Indigent Defense – Online screening, attorney appointment system</h5>
                    Managing the development of an online solution which can be use for little or no cost by any County to deal with Indigent Qualification, Attorney Appointment, Attorney Billing and related performance metrics.
                </div>
    
            </div>

            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <h5>Healthcare Services Company</h5>
                    Led the design and implementation of a Business Intelligence and Management Scorecard for this provider of health clinics and health programs.  Project integrated data from over 14 disparate subsystems allowing a single view of patient use of offerings across the business.
                    <h5 class="mt-3">US Acute Care Hospital</h5>
                    Directed multiple projects across the hospitals different divisions including Program Management Office, organizational design, development of an Executive Dashboard, software selection, ERP implementation, and business process re-engineering.  Anticipated savings from implemented projects over $10m.
                </div>
                <div class="offset-lg-1 col-lg-3 col-sm-12">
                    <img src="{{ asset('img/success/healthcare.jpg') }}" class="success" alt="">
                </div>                
            </div>     

            <div class="row my-5">
                <div class="col-lg-4 col-sm-12 my-2">
                    <img src="{{ asset('img/success/refinery.jpg') }}" class="success-col" alt="">
                </div>
                <div class="col-lg-4 col-sm-12 my-2">
                    <h5>Oil Refining Company</h5>
                    Project based in Japan for an Oil refining company jointly owned by a Japanese Oil conglomerate and a US Oil Major.  The project scope was to strategize, develop and implement a new refinery wide solution.  This $25m project resulted in documented savings that would give an ROI in 24 months and position the company as a world class refinery.
                </div>
                <div class="col-lg-4 col-sm-12 my-2">
                    <h5>Oil and Gas Company</h5>
                    Provided Application Managed Services to support this major international group’s acquisition of a pressure control corporations systems.  Took over the support desk and delivered expert assistance of the in-house ERP systems during a 3-5 year transition onto a single global platform.
                </div> 
            </div>       
            <div class="row my-5">
                <div class="col-lg-4 col-sm-12 my-2">
                    <h5>Middle East Conglomerate</h5>
                    Project based in the Middle East for the largest independent oil company in the world.  In addition to the oil activities, this company funds the management and development of all infrastructure, public and private enterprise in the United Arab Emirates.  The challenge was to analyze, design and implement new business processes, a new IT infrastructure and a new organizational structure enabled by several different software vendors.
                </div>
                <div class="col-lg-4 col-sm-12 my-2">
                    <img src="{{ asset('img/success/industrial.jpg') }}" class="success-col" alt="">
                </div>
                <div class="col-lg-4 col-sm-12 my-2">
                    <h5>North American Industrial Cleaning/Mechanical Turnaround Co</h5>
                    Led the project teams (>100 people) in significant organizational re-design, KPI development, job definition and net change training, systems selection and implementation and business process change; turning 300 locations into one company.  This resulted in multi-year process design, configuration and implementation projects, including online and custom build solutions.
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-12">
                    <img src="{{ asset('img/success/pharmacy.jpg') }}" class="success" alt="">
                </div>
                <div class="offset-lg-3 col-lg-6 col-sm-12">
                    <h5>Worldwide Pharmaceutical Manufacturer</h5>
                    Projects based in the NJ corporate headquarters of this Pharma Company, leading their internal Operational Excellence team in a strategic analysis of their worldwide “Order to Cash”, “Global Supply Chain” and “Customer Satisfaction” processes.  This resulted in the definition of new processes, performance indicators, structures, roles and responsibilities with identified annual savings of >$25m.
                </div>
            </div>
        </div>
</section>
    
@endsection
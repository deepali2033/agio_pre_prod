@extends('frontend.layout.main')
@section('container')
@php
$users = DB::table('users')
    ->select('id', 'name')
    ->get();

    @endphp
    <style> 
        textarea.note-codable {
            display: none !important;
        }

        header {
            display: none;
        }
    </style>
    <!-- -----------------------------grid-1----------------------------script -->
    <script>
        $(document).ready(function() {
            $('#info_product_material').click(function(e) {
                function generateTableRow(serialNumber) {
                    var users = @json($users); 
                    var html =
                    '<tr>' +
                        '<td><input disabled type="text" name="info_product_material[' + serialNumber + '][serial]" value="' + serialNumber +
                        '"></td>' +
                        '<td><input type="text" id="info_product_code" name="info_product_material[' + serialNumber + '][info_product_code]" value=""></td>' +
                        '<td><input type="text" name="info_product_material[' + serialNumber + '][info_batch_no]" value=""></td>'+
                        '<td>' +
                        '<div class="col-lg-6 new-date-data-field">' +
                        '<div class="group-input input-date">' +
                        '<div class="calenderauditee">' +
                        '<input type="text" readonly id="info_mfg_date_' + serialNumber + '" placeholder="MM-YYYY" />' +
                        '<input type="month" name="info_product_material[' + serialNumber + '][info_mfg_date]" value="" class="hide-input" oninput="handleMonthInput(this, \'info_mfg_date_' + serialNumber + '\')">' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</td>' +
                        '<td>' +
                        '<div class="col-lg-6 new-date-data-field">' +
                        '<div class="group-input input-date">' +
                        '<div class="calenderauditee">' +
                        '<input type="text" readonly id="info_expiry_date' + serialNumber + '" placeholder="MM-YYYY" />' +
                        '<input type="month" name="info_product_material[' + serialNumber + '][info_expiry_date]" value="" class="hide-input" oninput="handleMonthInput(this, \'info_expiry_date' + serialNumber + '\')">' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</td>' +
                        '<td><input type="text" name="info_product_material[' + serialNumber + '][info_label_claim]" value=""></td>' +
                        '<td><input type="text" name="info_product_material[' + serialNumber + '][info_pack_size]" value=""></td>' +
                        '<td><input type="text" name="info_product_material[' + serialNumber + '][info_analyst_name]" value=""></td>' +
                        '<td><input type="text" name="info_product_material[' + serialNumber + '][info_others_specify]" value=""></td>' +
                        '<td><input type="text" name="info_product_material[' + serialNumber + '][info_process_sample_stage]" value=""></td>' +
                        '<td><select name="info_product_material[' + serialNumber + '][info_packing_material_type]"><option value="">--Select--</option><option value="Primary">Primary</option><option value="Secondary">Secondary</option><option value="Tertiary">Tertiary</option><option value="Not Applicable">Not Applicable</option></select></td>' +
                        '<td><select name="info_product_material[' + serialNumber + '][info_stability_for]"><option value="">--Select Option--</option><option vlaue="Submission">Submission</option><option vlaue="Commercial">Commercial</option><option vlaue="Pack Evaluation">Pack Evaluation</option><option vlaue="Not Applicable">Not Applicable</option></select></td>' +
                        '<td><button type="text" class="removeRowBtn">Remove</button></td>' +

                    '</tr>';
                    for (var i = 0; i < users.length; i++) {
                        html += '<option value="' + users[i].id + '">' + users[i].name + '</option>';
                    }

                    html += '</select></td>' +

                        '</tr>';

                    return html;
                }

                var tableBody = $('#info_product_material_details tbody');
                var rowCount = tableBody.children('tr').length;
                var newRow = generateTableRow(rowCount + 1);
                tableBody.append(newRow);
            });
        });
    </script>

    <!-- --------------------------------grid-2--------------------------->
    <script>
        $(document).ready(function() {
            $('#details_stability').click(function(e) {
                function generateTableRow(serialNumber) {
                    var html =
                        '<tr>' +
                            '<td><input disabled type="text" name="details_stability[ '+ serialNumber + '][serial]" value="' + serialNumber +
                            '"></td>' +
                            '<td><input type="text" name="details_stability[ '+ serialNumber + '][stability_study_arnumber]"></td>'+
                            '<td><input type="text" name="details_stability[ '+ serialNumber + '][stability_study_condition_temprature_rh]"></td>'+
                            '<td><input type="text" name="details_stability[ '+ serialNumber + '][stability_study_Interval]"></td>'+
                            '<td><input type="text" name="details_stability[ '+ serialNumber + '][stability_study_orientation]"></td>'+
                            '<td><input type="text" name="details_stability[ '+ serialNumber + '][stability_study_pack_details]"></td>'+
                            '<td><input type="text" name="details_stability[ '+ serialNumber + '][stability_study_specification_no]"></td>'+
                            '<td><input type="text" name="details_stability[ '+ serialNumber + '][stability_study_sample_description]"></td>'+
                            '<td><button type="text" class="removeRowBtn">Remove</button></td>' +
                        '</tr>';
                    // for (var i = 0; i < users.length; i++) {
                    //     html += '<option value="' + users[i].id + '">' + users[i].name + '</option>';
                    // }

                    // html += '</select></td>' + 
                    return html;
                }

                var tableBody = $('#details_stability_details tbody');
                var rowCount = tableBody.children('tr').length;
                var newRow = generateTableRow(rowCount + 1);
                tableBody.append(newRow);
            });
        });
    </script>
    <!-- ------------------------------grid-3-------------------------script -->
    <script>
        $(document).ready(function() {
            $('#oos_details').click(function(e) {
                function generateTableRow(serialNumber) {
                    var html =
                        '<tr>' +
                            '<td><input disabled type="text" name="oos_detail['+ serialNumber +'][serial]" value="' + serialNumber +
                            '"></td>' +
                            '<td><input type="text" name="oos_detail['+ serialNumber +'][oos_arnumber]"></td>'+
                            '<td><input type="text" name="oos_detail['+ serialNumber +'][oos_test_name]"></td>' +
                            '<td><input type="text" name="oos_detail['+ serialNumber +'][oos_results_obtained]"></td>' +
                            '<td><input type="text" name="oos_detail['+ serialNumber +'][oos_specification_limit]"></td>' +
                            '<td><input type="file" name="oos_detail['+ serialNumber +'][oos_file_attachment]"></td>' +
                            '<td><input type="text" name="oos_detail['+ serialNumber +'][oos_submit_by]"></td>' +
                            '<td>' +
                                '<div class="col-lg-6 new-date-data-field">' +
                                '<div class="group-input input-date">' +
                                '<div class="calenderauditee">' +
                                '<input type="text" readonly id="oos_submit_on' + serialNumber + '" placeholder="DD-MM-YYYY" />' +
                                '<input type="date" name="oos_detail[' + serialNumber + '][oos_submit_on]" value="" class="hide-input" oninput="handleDateInput(this, \'oos_submit_on' + serialNumber + '\')">' +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                            '</td>' +
                        
                            '<td><button type="text" class="removeRowBtn">Remove</button></td>'
                         '</tr>';
                    return html;
                }

                var tableBody = $('#oos_details_details tbody');
                var rowCount = tableBody.children('tr').length;
                var newRow = generateTableRow(rowCount + 1);
                tableBody.append(newRow);
            });
        });
    </script>
    
    <!-- ------------------------------grid-4 products_details-------------------------script -->
    <script>
        $(document).ready(function() {
            $('#products_details').click(function(e) {
                function generateTableRow(serialNumber) {
                    var html =
                        '<tr>' +
                            '<td><input disabled type="text" name="products_details['+ serialNumber +'][serial]" value="' + serialNumber +
                            '"></td>' +
                            '<td><input type="text" name="products_details['+ serialNumber +'][product_name]"></td>'+
                            '<td><input type="text" name="products_details['+ serialNumber +'][product_AR_No]"></td>' +
                            '<td>' +
                                '<div class="col-lg-6 new-date-data-field">' +
                                '<div class="group-input input-date">' +
                                '<div class="calenderauditee">' +
                                '<input type="text" readonly id="sampled_on' + serialNumber + '" placeholder="DD-MM-YYYY" />' +
                                '<input type="date" name="products_details[' + serialNumber + '][sampled_on]" value="" class="hide-input" oninput="handleDateInput(this, \'sampled_on' + serialNumber + '\')">' +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                            '</td>' +
                        
                            '<td><input type="text" name="products_details['+ serialNumber +'][sample_by]"></td>' +
                            '<td>' +
                                '<div class="col-lg-6 new-date-data-field">' +
                                '<div class="group-input input-date">' +
                                '<div class="calenderauditee">' +
                                '<input type="text" readonly id="analyzed_on' + serialNumber + '" placeholder="DD-MM-YYYY" />' +
                                '<input type="date" name="products_details[' + serialNumber + '][analyzed_on]" value="" class="hide-input" oninput="handleDateInput(this, \'analyzed_on' + serialNumber + '\')">' +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                            '</td>' +
                            '<td>' +
                                '<div class="col-lg-6 new-date-data-field">' +
                                '<div class="group-input input-date">' +
                                '<div class="calenderauditee">' +
                                '<input type="text" readonly id="observed_on' + serialNumber + '" placeholder="DD-MM-YYYY" />' +
                                '<input type="date" name="products_details[' + serialNumber + '][observed_on]" value="" class="hide-input" oninput="handleDateInput(this, \'observed_on' + serialNumber + '\')">' +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                            '</td>' +
                           '<td><button type="text" class="removeRowBtn">Remove</button></td>' +

                        '</tr>'; 
                    return html;
                }

                var tableBody = $('#products_details_details tbody');
                var rowCount = tableBody.children('tr').length;
                var newRow = generateTableRow(rowCount + 1);
                tableBody.append(newRow);
            });
        });
    </script>
    <!-- ------------------------------grid-5 instrument_details-------------------------script -->
    <script>
        $(document).ready(function() {
            $('#instrument_details').click(function(e) {
                function generateTableRow(serialNumber) {
                    var html =
                        '<tr>' +
                            '<td><input disabled type="text" name="instrument_detail['+ serialNumber +'][serial]" value="' + serialNumber +
                            '"></td>' +
                            '<td><input type="text" name="instrument_detail['+ serialNumber +'][instrument_name]"></td>'+
                            '<td><input type="text" name="instrument_detail['+ serialNumber +'][instrument_id_number]"></td>' +
                            '<td><button type="text" class="removeRowBtn">Remove</button></td>' +

                        '</tr>'; 
                    return html;
                }

                var tableBody = $('#instrument_details_details tbody');
                var rowCount = tableBody.children('tr').length;
                var newRow = generateTableRow(rowCount + 1);
                tableBody.append(newRow);
            });
        });
    </script>
    <!-- ---------------------------grid-1 ---Preliminary Lab Invst. Review----------------------------- -->

    <script>
        $(document).ready(function() {
            $('#oos_capa').click(function(e) {
                function generateTableRow(serialNumber) {
                    var html =
                        '<tr>' +
                        '<td><input disabled type="text" name="oos_capa['+ serialNumber +'][serial]" value="' + serialNumber +
                        '"></td>' +
                        '<td><input type="text" name="oos_capa['+ serialNumber +'][info_oos_number]" value=""></td>' +
                        '<td>' +
                        '<div class="col-lg-6 new-date-data-field">' +
                        '<div class="group-input input-date">' +
                        '<div class="calenderauditee">' +
                        '<input type="text" readonly id="info_oos_reported_date' + serialNumber + '" placeholder="DD-MM-YYYY" />' +
                        '<input type="date" name="oos_capa[' + serialNumber + '][info_oos_reported_date]" value="" class="hide-input" oninput="handleDateInput(this, \'info_oos_reported_date' + serialNumber + '\')">' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</td>' +
                        '<td><input type="text" name="oos_capa['+ serialNumber +'][info_oos_description]" value=""></td>' +
                        '<td><input type="text" name="oos_capa['+ serialNumber +'][info_oos_previous_root_cause]"value=""></td>' +
                        '<td><input type="text" name="oos_capa['+ serialNumber +'][info_oos_capa]" value=""></td>' +
                        '<td>' +
                        '<div class="col-lg-6 new-date-data-field">' +
                        '<div class="group-input input-date">' +
                        '<div class="calenderauditee">' +
                        '<input type="text" readonly id="info_oos_closure_date' + serialNumber + '" placeholder="DD-MM-YYYY" />' +
                        '<input type="date" name="oos_capa[' + serialNumber + '][info_oos_closure_date]" value="" class="hide-input" oninput="handleDateInput(this, \'info_oos_closure_date' + serialNumber + '\')">' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</td>' +
                        '<td><select name="oos_capa['+ serialNumber +'][info_oos_capa_requirement]"><option value="">Select Option</option><option value="yes">Yes</option><option value="No">No</option></select></td>' +
                        '<td><input type="text" name="oos_capa['+ serialNumber +'][info_oos_capa_reference_number]" value=""></td>' +
                        '<td><button type="text" class="removeRowBtn">Remove</button></td>' +
                        '</tr>';
                   
                    return html;
                }

                var tableBody = $('#oos_capa_details tbody');
                var rowCount = tableBody.children('tr').length;
                var newRow = generateTableRow(rowCount + 1);
                tableBody.append(newRow);
            });
        });
    </script>


    <!-- -----------------------------grid-1----------OOS Conclusion ---------------- -->

    <script>
        $(document).ready(function() {
            $('#oos_conclusion').click(function(e) {
                function generateTableRow(serialNumber) {
                    var html =
                        '<tr>' +
                        '<td><input disabled type="text" name="oos_conclusion[' + serialNumber + '][serial]" value="' + serialNumber +
                        '"></td>' +
                        '<td><input type="text" name="oos_conclusion[' + serialNumber + '][summary_results_analysis_detials]"></td>' +
                        '<td><input type="text" name="oos_conclusion[' + serialNumber + '][summary_results_hypothesis_experimentation_test_pr_no]"></td>' +
                        '<td><input type="text" name="oos_conclusion[' + serialNumber + '][summary_results]"></td>' +
                        '<td><input type="text" name="oos_conclusion[' + serialNumber + '][summary_results_analyst_name]"></td>' +
                        '<td><input type="text" name="oos_conclusion[' + serialNumber + '][summary_results_remarks]"></td>' +
                        '<td><button type="text" class="removeRowBtn">Remove</button></td>' +
                        '</tr>';
                    '</tr>';

                    return html;
                }

                var tableBody = $('#oos_conclusion_details tbody');
                var rowCount = tableBody.children('tr').length;
                var newRow = generateTableRow(rowCount + 1);
                tableBody.append(newRow);
            });
        });
    </script>


    <!-- -----------------------------grid-1----------OOSConclusion_Review ---------------- -->

    <script>
        $(document).ready(function() {
            $('#oosconclusion_review').click(function(e) {
                function generateTableRow(serialNumber) {
                    var html =
                        '<tr>' +
                        '<td><input disabled type="text" name="oos_conclusion_review[' + serialNumber + '][serial]" value="' + serialNumber +
                        '"></td>' +
                        '<td><input type="text" name="oos_conclusion_review[' + serialNumber + '][conclusion_review_product_name]"></td>' +
                        '<td><input type="text" name="oos_conclusion_review[' + serialNumber + '][conclusion_review_batch_no]"></td>' +
                        '<td><input type="text" name="oos_conclusion_review[' + serialNumber + '][conclusion_review_any_other_information]"></td>' +
                        '<td><input type="text" name="oos_conclusion_review[' + serialNumber + '][conclusion_review_action_affecte_batch]"></td>' +
                        '<td><button type="text" class="removeRowBtn">Remove</button></td>'
                        '</tr>';
                    '</tr>';

                    return html;
                }

                var tableBody = $('#oosconclusion_review_details tbody');
                var rowCount = tableBody.children('tr').length;
                var newRow = generateTableRow(rowCount + 1);
                tableBody.append(newRow);
            });
        });
    </script>
    <!-- ======GRID END  =============-->

    <div class="form-field-head">
        <!-- <div class="pr-id">
                        New Document
                    </div> -->
        <div class="division-bar pt-3">
            <strong>Site Division/Project</strong> :
            {{ Helpers::getDivisionName(session()->get('division')) }}/ OOS Chemical
        </div>
        <!-- <div class="button-bar">
            <button type="button">Save</button>
            <button type="button">Cancel</button>
            <button type="button">New</button>
            <button type="button">Copy</button>
            <button type="button">Child</button>
            <button type="button">Check Spelling</button>
            <button type="button">Change Project</button>
        </div> -->
    </div>



    {{-- ======================================
                    DATA FIELDS
    ======================================= --}}
    <div id="change-control-fields">
        <div class="container-fluid">

            <!-- Tab links -->
            <div class="cctab">
                <button class="cctablinks active" onclick="openCity(event, 'CCForm1')">General Information</button>
                <button class="cctablinks" onclick="openCity(event, 'CCForm2')">Preliminary Lab. Investigation</button>
                <button class="cctablinks" onclick="openCity(event, 'CCForm18')">CheckList - Preliminary Lab. Investigation</button>
                <button class="cctablinks" onclick="openCity(event, 'CCForm3')">Preliminary Lab Inv. Conclusion</button>
                <button class="cctablinks" onclick="openCity(event, 'CCForm4')">Preliminary Lab Invst. Review</button>
                <!-- checklist start -->
                <button class="cctablinks" onclick="openCity(event, 'CCForm24')">Checklist - Investigation of Bacterial Endotoxin Test (BET)</button>
                <button class="cctablinks" onclick="openCity(event, 'CCForm25')">Checklist - Investigation of Sterility</button>
                <button class="cctablinks" onclick="openCity(event, 'CCForm26')">Checklist - Investigation of Microbial limit test (MLT)</button>
                <button class="cctablinks" onclick="openCity(event, 'CCForm21')">Checklist - Investigation of Chemical assay</button>
                <button class="cctablinks" onclick="openCity(event, 'CCForm22')">Checklist - Residual solvent (RS)</button>
                <button class="cctablinks" onclick="openCity(event, 'CCForm23')">Checklist - Dissolution </button>
                <!-- checklist closed -->
                <button class="cctablinks" onclick="openCity(event, 'CCForm5')">Phase II Investigation</button>
                <button class="cctablinks" onclick="openCity(event, 'CCForm19')">CheckList - Phase II Investigation </button>
                <button class="cctablinks" onclick="openCity(event, 'CCForm6')">Phase II QA Review</button>
                <button class="cctablinks" onclick="openCity(event, 'CCForm7')">Additional Testing Proposal </button>
                <button class="cctablinks" onclick="openCity(event, 'CCForm8')">OOS Conclusion</button>
                <button class="cctablinks" onclick="openCity(event, 'CCForm9')">OOS Conclusion Review</button>
                <button class="cctablinks" onclick="openCity(event, 'CCForm10')">OOS QA Review</button>
                <!-- <button class="cctablinks" onclick="openCity(event, 'CCForm11')">Batch Disposition</button> -->
                <button class="cctablinks" onclick="openCity(event, 'CCForm13')">QA Head/Designee Approval</button>
                <button class="cctablinks" onclick="openCity(event, 'CCForm20')">Extension</button>
                <button class="cctablinks" onclick="openCity(event, 'CCForm17')">Activity Log</button>
                
            </div>
          <form id="Mainform" action="{{ route('oos.oosstore') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div id="step-form">
                @if (!empty($parent_id))
                <input type="hidden" name="parent_id" value="{{ $parent_id }}">
                <input type="hidden" name="parent_type" value="{{ $parent_type }}">
                @endif
            <!-- Tab content -->
            <!-- General Information -->
            <div id="CCForm1" class="inner-block cctabcontent">
                <div class="inner-block-content">

                    <div class="sub-head">General Information</div>
                    <div class="row">
                    <div class="col-lg-6">
                            <div class="group-input">
                                <label for="Initiator Group">Type </label>
                                <select id="dynamicSelectType" name="type">
                                    <option value="{{ route('oos.index') }}">OOS Chemical</option>
                                    <option value="{{ route('oos_micro.index') }}">OOS Micro</option>
                                    <option value="{{ route('oot.index')  }}">OOT</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="group-input">
                                <label for="Record Number"> Record Number </label>
                                {{-- <input disabled type="text" name="record_number"
                            value="{{ Helpers::getDivisionName(session()->get('division')) }}/OOS Chemical/{{ date('Y') }}/{{ $record_number }}"> --}}
                             <input type="hidden" name="record" value="{{ $record_number }}">
                                    <input disabled type="text" name="record"
                                value="{{ Helpers::getDivisionName(session()->get('division')) }}/OOS Chemical/{{ date('Y') }}/{{ $record_number }}">
                        </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="group-input">
                                <label disabled for="Division Code">Division Code<span class="text-danger"></span></label>
                                <input disabled type="text" name="division_code"
                                        value="{{ Helpers::getDivisionName(session()->get('division')) }}">
                                    <input type="hidden" name="division_id" value="{{ session()->get('division') }}">
                            </div>
                        </div>
                      
                        <div class="col-lg-6">
                            <div class="group-input">
                                <label for="Initiator">Initiator <span class="text-danger"></span></label>
                                <input type="hidden" name="initiator_id" value="{{ Auth::user()->id }}">
                                <input disabled type="text" name="initiator"
                                        value="{{ Auth::user()->name }}">
                            </div>
                        </div>
                        {{-- @php
                        // Calculate the due date (30 days from the initiation date)
                        $initiationDate = date('Y-m-d'); // Current date as initiation date
                        $dueDate = date('Y-m-d', strtotime($initiationDate . '+30 days')); // Due date
                    @endphp --}}
                        <div class="col-md-6 ">
                            <div class="group-input ">
                                <label for="intiation-date"> Date Of Initiation<span class="text-danger"></span></label>
                                <input type="hidden" value="{{ date('Y-m-d') }}" name="intiation_date">
                                <input readonly type="text" value="{{ date('d-M-Y') }}" name="intiation_date">
                    
                            </div>
                        </div>
                        <div class="col-lg-6 new-date-data-field">
                            <div class="group-input input-date">
                                <label for="Due Date"> Due Date </label>
                                <div><small class="text-primary">If revising Due Date, kindly mention revision reason in "Due Date Extension Justification" data field.</small></div>
                                <div class="calenderauditee">
                                <input type="text" name="due_date"  id="due_date"  readonly placeholder="DD-MMM-YYYY"/>
                                <input disabled type="date" name="due_date" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" class="hide-input"
                                oninput="handleDateInput(this, 'due_date')" />
                                </div>
                            </div>
                        </div>
                        
                        {{-- <script>
                            // Format the due date to DD-MM-YYYY
                            // Your input date
                            var dueDate = "{{ $dueDate }}"; // Replace {{ $dueDate }} with your actual date variable

                            // Create a Date object
                            var date = new Date(dueDate);

                            // Array of month names
                            var monthNames = [
                                "Jan", "Feb", "Mar", "Apr", "May", "Jun",
                                "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
                            ];

                            // Extracting day, month, and year from the date
                            var day = date.getDate().toString().padStart(2, '0'); // Ensuring two digits
                            var monthIndex = date.getMonth();
                            var year = date.getFullYear();

                            // Formatting the date in "dd-MMM-yyyy" format
                            var dueDateFormatted = `${day}-${monthNames[monthIndex]}-${year}`;

                            // Set the formatted due date value to the input field
                            document.getElementById('due_date').value = dueDateFormatted;
                        </script> --}}
                       {{-- <div class="col-lg-6">
                            <div class="group-input">
                                <label for="Short Description"> Severity Level</label>
                                <select name="severity_level_gi" >
                                    <option value="">Enter Your Selection Here</option>
                                    <option  value="Major">Major</option>
                                    <option value="Minor">Minor</option>
                                    <option value="Critical">Critical</option>
                                </select>
                            </div>
                        </div>--}} 
                        <div class="col-lg-12">
                            <div class="group-input">
                                <label for="Short Description">Short Description
                                    <span class="text-danger">*</span></label>
                                    <span id="rchars">255</span>characters remaining
                                <textarea id="docname"  name="description_gi" maxlength="255" required></textarea>
                            </div>
                            @error('short_description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                        </div>
                        <p id="docnameError" style="color:red">**Short Description is required</p>
                        <div class="col-lg-6">
                            <div class="group-input">
                                <label for="Short Description">Initiation department Group  <span class="text-danger"></span></label>
                                
                                <select name="initiator_group" id="initiator_group">
                                <option value="">Enter Your Selection Here</option>
                                @foreach (Helpers::getInitiatorGroups() as $code => $initiator_group) 
                                <option value="{{ $code }}" @if (old('initiator_group') == $code) selected @endif>{{ $initiator_group }}</option> 
                                @endforeach 
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="group-input">
                                <label for="Initiator Group Code">Initiation department Code <span class="text-danger"></span></label>
                                <input type="text" name="initiator_group_code" id="initiator_group_code" value="">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="group-input">
                                <label for="If Others">If Others
                                    <span class="text-danger">*</span></label>
                                <textarea id="docname"  name="if_others_gi" ></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="group-input">
                                <label for="Initiator Group Code">Is Repeat?</label>
                                <select name="is_repeat_gi">
                                    <option value="">Enter Your Selection Here</option>
                                    <option value="yes">yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>

                        {{--  <div class="col-lg-6">
                            <div class="group-input">
                                <label for="Initiator Group"></label>
                                <label for="Repeat Nature">Repeat Nature</label>
                                 <textarea  name="repeat_nature_gi" ></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="group-input">
                                <label for="Initiator Group">Nature of Change</label>
                                <select name="nature_of_change_gi">
                                    <option value="">Enter Your Selection Here</option>
                                    <option value="temporary">Temporary</option>
                                    <option value="permanent">Permanent</option>
                                </select>
                            </div>
                        </div>--}}
                        <div class="col-lg-6">
                            <div class="group-input">
                                <label for="Tnitiaror Grouo">Source Document Type</label>
                                <select name="source_document_type_gi">
                                    <option value="0">Enter Your Selection Here</option>
                                    <option value="OOT">OOT</option>
                                    <option value="Lab Incident">Lab Incident</option>
                                    <option value="Deviation">Deviation</option>
                                    <option value="Product Non-conformance">Product Non-conformance</option>
                                    <option value="Inspectional Observation">Inspectional Observation</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="group-input">
                                <label for="Reference Recores">Reference System Document</label>
                                <input type="text" name="reference_system_document_gi"  id="reference_system_document_gi" value="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="group-input">
                                <label for="Reference Document">Reference document</label>
                                <input type="text" name="reference_document"  id="reference_document" value="">
                            </div>
                        </div>
                        <div class="col-md-6 new-date-data-field">
                            <div class="group-input input-date">
                                <label for="due-date">OOS occurred On</label>
                                <div class="calenderauditee">                                    
                                    <input type="text"  id="deviation_occured_on_gi" readonly placeholder="DD-MM-YYYY" />
                                    <input type="date" name="deviation_occured_on_gi"   value=""
                                    class="hide-input"
                                    oninput="handleDateInput(this, 'deviation_occured_on_gi')"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 new-date-data-field">
                            <div class="group-input input-date">
                                <label for="OOS Observed On">OOS Observed On</label>
                                <div class="calenderauditee">
                                    <input type="text" id="oos_observed_on" readonly placeholder="DD-MMM-YYYY" />
                                    {{-- <td><input type="time" name="scheduled_start_time[]"></td> --}}
                                    <input type="date" name="oos_observed_on" max="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" class="hide-input"
                                        oninput="handleDateInput(this, 'oos_observed_on')" />
                                </div>
                            </div>
                            @error('Deviation_date')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-12 new-time-data-field">
                            <div class="group-input input-time">
                                <label for="deviation_time">Delay Justification</label>
                                <textarea id="delay_justification" name="delay_justification"></textarea>
                            </div>
                            {{-- @error('Deviation_date')
                                <div class="text-danger">{{  $message  }}</div>
                            @enderror --}}
                        </div>
                        <script>
                            flatpickr("#deviation_time", {
                                enableTime: true,
                                noCalendar: true,
                                dateFormat: "H:i", // 24-hour format without AM/PM
                                minuteIncrement: 1 // Set minute increment to 1

                            });
                        </script>
                                
                        <div class="col-lg-6 new-date-data-field">
                            <div class="group-input input-date">
                                <label for="Audit Schedule End Date">OOS Reported on</label>
                                <div class="calenderauditee">
                                    <input type="text" id="oos_reported_date" readonly placeholder="DD-MMM-YYYY" />
                                    <input type="date" name="oos_reported_date" max="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" 
                                      class="hide-input" oninput="handleDateInput(this, 'oos_reported_date')" />
                                </div>
                            </div>
                        </div>
                            <script>
                                $('.delayJustificationBlock').hide();

                                function calculateDateDifference() {
                                    let deviationDate = $('input[name=Deviation_date]').val();
                                    let reportedDate = $('input[name=Deviation_reported_date]').val();

                                    if (!deviationDate || !reportedDate) {
                                        console.error('Deviation date or reported date is missing.');
                                        return;
                                    }

                                    let deviationDateMoment = moment(deviationDate);
                                    let reportedDateMoment = moment(reportedDate);

                                    let diffInDays = reportedDateMoment.diff(deviationDateMoment, 'days');

                                    // if (diffInDays > 0) {
                                    //     $('.delayJustificationBlock').show();
                                    // } else {
                                    //     $('.delayJustificationBlock').hide();
                                    // }

                                }

                                $('input[name=Deviation_date]').on('change', function() {
                                    calculateDateDifference();
                                })

                                $('input[name=Deviation_reported_date]').on('change', function() {
                                    calculateDateDifference();
                                })
                            </script>
                            
                            <div class="col-lg-6">
                            <div class="group-input">
                                <label for="Reference Recores">Immediate action</label>
                                <input type="text" name="immediate_action"  id="immediate_action" value="">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="group-input">
                                <label for="Audit Attachments">Initial Attachments</label>
                                <small class="text-primary">
                                    Please Attach all relevant or supporting documents
                                </small>
                                <div class="file-attachment-field">
                                    <div class="file-attachment-list" id="initial_attachment_gi"></div>
                                    <div class="add-btn">
                                        <div>Add</div>
                                        <input type="file" id="myfile" name="initial_attachment_gi[]"
                                            oninput="addMultipleFiles(this, 'initial_attachment_gi')" multiple>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sub-head pt-3">OOS Information</div>
                        <div class="col-lg-6">
                            <div class="group-input">
                                <label for="Tnitiaror Grouo">Sample Type</label>
                                <select name="sample_type_gi">
                                    <option value="">Enter Your Selection Here</option>
                                    <option value="Raw Material">Raw Material</option>
                                    <option value="Packing Material">Packing Material</option>
                                    <option value="Finished Product">Finished Product</option>
                                    <option value="Satbility Sample">Satbility Sample</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="group-input">
                                <label for="Short Description ">Product / Material Name</label>
                                <input type="text" name="product_material_name_gi" placeholder="Enter your Product / Material Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="group-input ">
                                <label for="Short Description ">Market</label>
                                <input type="text" name="market_gi" placeholder="Enter your Market">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="group-input">
                                <label for="Initiator Group">Customer*</label>
                                <input type="text" name="customer_gi" placeholder="Enter your Customer">
                            </div>
                        </div>
                        <!-- ---------------------------grid-1 -------------------------------- -->
                        <div class="group-input">
                            <label for="audit-agenda-grid">
                                Info. On Product/ Material
                                <button type="button" name="audit-agenda-grid" id="info_product_material">+</button>

                                <span class="text-primary" data-bs-toggle="modal"
                                    data-bs-target="#document-details-field-instruction-modal"
                                    style="font-size: 0.8rem; font-weight: 400; cursor: pointer;">
                                    (Launch Instruction)
                                </span>
                            </label>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="info_product_material_details" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th style="width: 4%">Row#</th>
                                            <th style="width: 10%">Item/Product Code</th>
                                            <th style="width: 8%"> Batch No*.</th>
                                            <th style="width: 12%"> Mfg.Date</th>
                                            <th style="width: 12%">Expiry Date</th>
                                            <th style="width: 8%"> Label Claim.</th>
                                            <th style="width: 8%">Pack Size</th>
                                            <th style="width: 8%">Analyst Name</th>
                                            <th style="width: 10%">Others (Specify)</th>
                                            <th style="width: 10%"> In- Process Sample Stage.</th>
                                            <th style="width: 12% pt-3">Packing Material Type</th>
                                            <th style="width: 16% pt-2"> Stability for</th>
                                            <th style="width: 15%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input disabled type="text" name="info_product_material[0][serial]" value="1"></td>
                                            <td><input type="text" name="info_product_material[0][info_product_code]" value=""></td>
                                            <td><input type="text" name="info_product_material[0][info_batch_no]" value=""></td>
                                            <td>
                                            <div class="col-lg-6 new-date-data-field">
                                                <div class="group-input input-date">
                                                    <div class="calenderauditee">
                                                        <input type="text" id="info_mfg_date" readonly placeholder="MM-YYYY" />
                                                        <input type="month"  name="info_product_material[0][info_mfg_date]" value=""
                                                        class="hide-input" oninput="handleMonthInput(this, 'info_mfg_date')">
                                                    </div>
                                                </div>
                                            </div>
                                            </td> 
                                            <td>
                                            <div class="col-lg-6 new-date-data-field">
                                                <div class="group-input input-date">
                                                    <div class="calenderauditee">
                                                        <input type="text" id="info_expiry_date" readonly placeholder="MM-YYYY" />
                                                        <input type="month"  name="info_product_material[0][info_expiry_date]"
                                                        class="hide-input" oninput="handleMonthInput(this, 'info_expiry_date')">
                                                    </div>
                                                </div>
                                            </div>
                                            </td>
                                            
                                            <td><input type="text" name="info_product_material[0][info_label_claim]" value=""></td>
                                            <td><input type="text" name="info_product_material[0][info_pack_size]" value=""></td>
                                            <td><input type="text" name="info_product_material[0][info_analyst_name]" value=""></td>
                                            <td><input type="text" name="info_product_material[0][info_others_specify]" value=""></td>
                                            <td><input type="text" name="info_product_material[0][info_process_sample_stage]" value=""></td>
                                            <td>
                                                <select name="info_product_material[0][info_packing_material_type]">
                                                <option value="">Enter Your Selection Here</option>
                                                    <option value="Primary">Primary</option>
                                                    <option value="Secondary">Secondary</option>
                                                    <option value="Tertiary">Tertiary</option>
                                                    <option value="Not Applicable">Not Applicable</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="info_product_material[0][info_stability_for]">
                                                    <option value="">Enter Your Selection Here</option>
                                                    <option vlaue="Submission">Submission</option>
                                                    <option vlaue="Commercial">Commercial</option>
                                                    <option vlaue="Pack Evaluation">Pack Evaluation</option>
                                                    <option vlaue="Not Applicable">Not Applicable</option>
                                                </select>
                                            </td>
                                            <td><button type="text" class="removeRowBtn">Remove</button></td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- -------------------------------grid-2  ----------------------------------   -->
                        <div class="group-input">
                            <label for="audit-agenda-grid">
                                Details of Stability Study
                                <button type="button" name="audit-agenda-grid" id="details_stability">+</button>
                                <span class="text-primary" data-bs-toggle="modal"
                                    data-bs-target="#document-details-field-instruction-modal"
                                    style="font-size: 0.8rem; font-weight: 400; cursor: pointer;">
                                    (Launch Instruction)
                                </span>
                            </label>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="details_stability_details" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th style="width: 4%">Row#</th>
                                            <th style="width: 8%">AR Number</th>
                                            <th style="width: 12%">Condition: Temperature & RH</th>
                                            <th style="width: 12%">Interval</th>
                                            <th style="width: 16%">Orientation</th>
                                            <th style="width: 16%">Pack Details (if any)</th>
                                            <th style="width: 16%">Specification No.</th>
                                            <th style="width: 16%">Sample Description</th>
                                            <th style="width: 15%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input disabled type="text" name="details_stability[0][serial]" value="1"></td>
                                            <td><input type="text" name="details_stability[0][stability_study_arnumber]"></td>
                                            <td><input type="text" name="details_stability[0][stability_study_condition_temprature_rh]"></td>
                                            <td><input type="text" name="details_stability[0][stability_study_Interval]"></td>
                                            <td><input type="text" name="details_stability[0][stability_study_orientation]"></td>
                                            <td><input type="text" name="details_stability[0][stability_study_pack_details]"></td>
                                            <td><input type="text" name="details_stability[0][stability_study_specification_no]"></td>
                                            <td><input type="text" name="details_stability[0][stability_study_sample_description]"></td> 
                                            <td><button type="text" class="removeRowBtn">Remove</button></td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <!----------------grid-3----------------------------------- -->

                        <div class="group-input">
                            <label for="audit-agenda-grid">
                                OOS Details
                                <button type="button" name="audit-agenda-grid" id="oos_details">+</button>
                                <span class="text-primary" data-bs-toggle="modal"
                                    data-bs-target="#document-details-field-instruction-modal"
                                    style="font-size: 0.8rem; font-weight: 400; cursor: pointer;">
                                    (Launch Instruction)
                                </span>
                            </label>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="oos_details_details" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th style="width: 4%">Row#</th>
                                            <th style="width: 8%">AR Number.</th>
                                            <th style="width: 8%">Test Name of OOS</th>
                                            <th style="width: 8%">Results Obtained</th>
                                            <th style="width: 8%">Specification Limit</th>
                                            <th style="width: 16%">File Attachment</th>
                                            <th style="width: 8%">Submit By</th>
                                            <th style="width: 16%">Submit On</th>
                                            <th style="width: 15%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input disabled type="text" name="oos_detail[0][serial]" value="1"></td>
                                            <td><input type="text" name="oos_detail[0][oos_arnumber]"></td>
                                            <td><input type="text" name="oos_detail[0][oos_test_name]"></td>
                                            <td><input type="text" name="oos_detail[0][oos_results_obtained]"></td>
                                            <td><input type="text" name="oos_detail[0][oos_specification_limit]"></td>
                                            <td><input type="file" name="oos_detail[0][oos_file_attachment]"></td>
                                            <td><input type="text" name="oos_detail[0][oos_submit_by]"></td>
                                            <td>
                                            <div class="col-lg-6 new-date-data-field">
                                                <div class="group-input input-date">
                                                    <div class="calenderauditee">
                                                        <input type="text" id="oos_submit_on" readonly 
                                                        placeholder="DD-MM-YYYY" />
                                                        <input type="date" name="oos_detail[0][oos_submit_on]" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"
                                                        class="hide-input" oninput="handleDateInput(this, 'oos_submit_on')">
                                                    </div>
                                                </div>
                                            </div>
                                            </td>
                                            <td><button type="text" class="removeRowBtn">Remove</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!---------------- grid-4 Products_details----------------------------------- -->

                        <div class="group-input">
                            <label for="audit-agenda-grid">
                            Products details
                                <button type="button" name="audit-agenda-grid" id="products_details">+</button>
                                <span class="text-primary" data-bs-toggle="modal"
                                    data-bs-target="#document-details-field-instruction-modal"
                                    style="font-size: 0.8rem; font-weight: 400; cursor: pointer;">
                                    (Launch Instruction)
                                </span>
                            </label>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="products_details_details" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th style="width: 4%">Row#</th>
                                            <th style="width: 8%"> Name of Product</th>
                                            <th style="width: 8%"> A.R.No </th>
                                            <th style="width: 8%"> Sampled on </th>
                                            <th style="width: 8%"> Sample by</th>
                                            <th style="width: 8%"> Analyzed on</th>
                                            <th style="width: 8%"> Observed on </th>
                                            <th style="width: 5%"> Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input disabled type="text" name="products_details[0][serial]" value="1"></td>
                                            <td><input type="text" name="products_details[0][product_name]"></td>
                                            <td><input type="text" name="products_details[0][product_AR_No]"></td> 
                                            <td>
                                            <div class="col-lg-6 new-date-data-field">
                                                <div class="group-input input-date">
                                                    <div class="calenderauditee">
                                                        <input type="text" id="sampled_on" readonly placeholder="DD-MM-YYYY" />
                                                        <input type="date" name="products_details[0][sampled_on]" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"
                                                        class="hide-input" oninput="handleDateInput(this, 'sampled_on')">
                                                    </div>
                                                </div>
                                            </div>
                                            </td>
                                            <td><input type="text" name="products_details[0][sample_by]"></td>
                                            <td>
                                            <div class="col-lg-6 new-date-data-field">
                                                <div class="group-input input-date">
                                                    <div class="calenderauditee">
                                                        <input type="text" id="analyzed_on" readonly placeholder="DD-MM-YYYY" />
                                                        <input type="date" name="products_details[0][analyzed_on]" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"
                                                        class="hide-input" oninput="handleDateInput(this, 'analyzed_on')">
                                                    </div>
                                                </div>
                                            </div>
                                            <td>
                                            <div class="col-lg-6 new-date-data-field">
                                                <div class="group-input input-date">
                                                    <div class="calenderauditee">
                                                        <input type="text" id="observed_on" readonly placeholder="DD-MM-YYYY" />
                                                        <input type="date" name="products_details[0][observed_on]" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"
                                                        class="hide-input" oninput="handleDateInput(this, 'observed_on')">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                            <td><button type="text" class="removeRowBtn">Remove</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                         <!---------------- grid-5 instrument_details----------------------------------- -->

                         <div class="group-input">
                            <label for="audit-agenda-grid">
                            Instrument details
                                <button type="button" name="audit-agenda-grid" id="instrument_details">+</button>
                                <span class="text-primary" data-bs-toggle="modal"
                                    data-bs-target="#document-details-field-instruction-modal"
                                    style="font-size: 0.8rem; font-weight: 400; cursor: pointer;">
                                    (Launch Instruction)
                                </span>
                            </label>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="instrument_details_details" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th style="width: 4%">Row#</th>
                                            <th style="width: 8%"> Name of instrument</th>
                                            <th style="width: 8%"> Instrument Id Number</th>
                                            <th style="width: 5%"> Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input disabled type="text" name="instrument_detail[0][serial]" value="1"></td>
                                            <td><input type="text" name="instrument_detail[0][instrument_name]"></td>
                                            <td><input type="text" name="instrument_detail[0][instrument_id_number]"></td>
                                            <td><button type="text" class="removeRowBtn">Remove</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="button-block">
                            <button type="submit" class="saveButton on-submit-disable-button">Save</button>
                            <!-- <button type="button" class="backButton" onclick="previousStep()">Back</button> -->
                            <button type="button" class="nextButton" onclick="nextStep()">Next</button>
                            <button type="button"> <a href="{{ url('rcms/qms-dashboard') }}" class="text-white">
                                    Exit </a> </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Preliminary Lab. Investigation -->
            <div id="CCForm2" class="inner-block cctabcontent">
                <div class="inner-block-content">
                    <div class="sub-head">Preliminary Lab. Investigation </div>
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <div class="group-input">
                                <label for="Audit Schedule Start Date"> Comments </label>
                                <div class="col-md-12 4">
                                    <div class="group-input">
                                        <!-- <label for="Description Deviation">Description of Deviation</label> -->
                                        <!-- <div><small class="text-primary">Please insert "NA" in the data field if it does not require completion</small></div> -->
                                        <textarea class="summernote" name="Comments_plidata" id="summernote-1">
                                    </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <div class="group-input">
                                <label for="Description Deviation">Justify Field Alert</label>
                                <!-- <div><small class="text-primary">Please insert "NA" in the data field if it does not require completion</small></div> -->
                                <textarea class="summernote" name="justify_if_no_field_alert_pli" id="summernote-1">
                                    </textarea>
                            </div>
                        </div>
                        <!-- <div class="col-lg-6">
                                            <div class="group-input">
                                                <label for="Facility Name"> Facility Name </label>
                                                <select multiple name="facility_name" placeholder="Select Nature of Deviation" data-search="false" data-silent-initial-value-set="true" id="facility_name">
                                                    <option value="Piyush">Piyush Sahu</option>
                                                    <option value="Piyush">Piyush Sahu</option>
                                                    <option value="Piyush">Piyush Sahu</option>
                                                    <option value="Piyush">Piyush Sahu</option>
                                                    <option value="Piyush">Piyush Sahu</option>
                                                    <option value="Piyush">Piyush Sahu</option>
                                                    <option value="Piyush">Piyush Sahu</option>
                                                    <option value="Piyush">Piyush Sahu</option>
                                                    <option value="Piyush">Piyush Sahu</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="group-input">
                                                <label for="Group Name"> Group Name </label>
                                                <select multiple name="group_name" placeholder="Select Nature of Deviation" data-search="false" data-silent-initial-value-set="true" id="group_name">
                                                    <option value="Piyush">Piyush Sahu</option>
                                                    <option value="Piyush">Piyush Sahu</option>
                                                    <option value="Piyush">Piyush Sahu</option>
                                                    <option value="Piyush">Piyush Sahu</option>
                                                    <option value="Piyush">Piyush Sahu</option>
                                                    <option value="Piyush">Piyush Sahu</option>
                                                    <option value="Piyush">Piyush Sahu</option>
                                                    <option value="Piyush">Piyush Sahu</option>
                                                    <option value="Piyush">Piyush Sahu</option>
                                                </select>
                                            </div>
                                        </div> -->
                        

                        <div class="col-lg-12 mb-4">
                            <div class="group-input">
                                <label for="Audit Schedule Start Date">Justify Analyst Int. </label>
                                    <textarea class="summernote" name="justify_if_no_analyst_int_pli" id="summernote-1">
                                    </textarea>

                            </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="group-input">
                                <label for="Product/Material Name">Phase I Investigation</label>
                                <select name="phase_i_investigation_pli">
                                    <option value="">Enter Your Selection Here</option>
                                    <option value="Phase I Micro">Phase I Micro</option>
                                    <option value="Phase I Chemical">Phase I Chemical</option>
                                    <option value="Hypothesis">Hypothesis</option>
                                    <option value="Resampling">Resampling</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                        </div>
                       
                        <div class="col-lg-6">
                            <div class="group-input">
                                <label for="Audit Attachments">File Attachments</label>
                                <small class="text-primary">
                                    Please Attach all relevant or supporting documents
                                </small>
                                <div class="file-attachment-field">
                                    <div class="file-attachment-list" id="file_attachments_pli"></div>
                                    <div class="add-btn">
                                        <div>Add</div>
                                        <input type="file" id="myfile" name="file_attachments_pli[]"
                                            oninput="addMultipleFiles(this, 'file_attachments_pli')" multiple>
                                    </div>
                                </div>
                               

                            </div>
                        </div>
                        <div class="button-block">
                            <button type="submit" id="ChangesaveButton" class="saveButton on-submit-disable-button">Save</button>
                            <button type="button" class="backButton" onclick="previousStep()">Back</button>
                            <button type="button" id="ChangeNextButton" class="nextButton"
                                onclick="nextStep()">Next</button>
                            <button type="button"> <a href="{{ url('rcms/qms-dashboard') }}" class="text-white">
                                    Exit </a> </button>
                        </div>
                    </div>
                </div>

            </div>
            <!-- CheckList - Preliminary Lab. Investigation -->
            <div id="CCForm18" class="inner-block cctabcontent">
                <div class="inner-block-content">
                    <div class="sub-head">CheckList - Preliminary Lab. Investigation </div>
                    <div class="row">
                        <div class="col-12">
                            <center>
                                <label style="font-weight: bold; for="Audit Attachments">PHASE- I B INVESTIGATION REPORT</label>
                            </center>
@php
    $lab_inv_questions = array(
            "Aliquot and standard solutions preserved",
            "Visual examination (solid and solution) reveals normal or abnormal appearance",
            "The analyst is trained on the method.",
            "Correct test procedure followed e.g. Current Version of standard testing procedure has been used in testing.",
            "Current Validated analytical Method has been used and the data of analytical method validation has been reviewed and found satisfactory.",
            "Correct sample(s) tested.",
            "Sample Integrity maintained, correct container is used in testing.",
            "Assessment of the possibility that the sample contamination (sample left open to air or unattended) has occurred during the testing/ re-testing procedure",
            "All equipment used in the testing is within calibration due period.",
            "Equipment log book has been reviewed and no any failure or malfunction has been reviewed.",
            "Any malfunctioning and / or out of calibration analytical instruments (including glassware) is used.",
            "Whether reference standard / working standard is correct (in terms of appearance, purity, LOD/water content & its storage) and assay values are determined correctly.",
            "Whether test solution / volumetric solution used are properly prepared & standardized.",
            "Review RSD, resolution factor and other parameters required for the suitability of the test system. Check if any out of limit parameters is included in the chromatographic analysis, correctness of the column used previous use of the column.",
            "In the raw data, including chromatograms and spectra; any anomalous or suspect peaks or data has been observed.",
            "Any such type of observation has been observed previously (Assay, Dissolution etc.).",
            "Any unusual or unexpected response observed with standard or test preparations (e.g. whether contamination of equipment by previous sample observed).",
            "System suitability conditions met (those before analysis and during analysis).",
            "Correct and clean pipette / volumetric flasks volumes, glassware used as per recommendation.",
            "Other potentially interfering testing/activities occurring at the time of the test which might lead to OOS.",
            "Review of other data for other batches performed within the same analysis set and any nonconformance observed.",
            "Consideration of any other OOS results obtained on the batch of material under test and any non-conformance observed.",
            "Media/Reagents prepared according to procedure.",
            "All the materials are within the due period of expiry.",
            "Whether, analysis was performed by any other alternate validated procedure",
            "Whether environmental condition is suitable to perform the test.",
            "Interview with analyst to assess knowledge of the correct procedure"
        );
@endphp
                            <div class="group-input">
                                <div class="why-why-chart mx-auto" style="width: 100%">
                                    <table class="table table-bordered ">
                                        <thead>
                                            <tr>
                                                <th style="width: 5%;">Sr.No.</th>
                                                <th style="width: 40%;">Question</th>
                                                <th style="width: 20%;">Response</th>
                                                <th>Remarks</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($lab_inv_questions as $lab_inv_question)
                                                <tr>
                                                    <td class="flex text-center">{{ $loop->index + 1 }}</td>
                                                    <td><input type="text" readonly name="question[]" value="{{ $lab_inv_question }}">
                                                    </td>
                                                    <td>
                                                        <div style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                            <select name="checklist_lab_inv[{{ $loop->index }}][response]" id="response" style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                                <option value="">Enter Your Selection Here</option>
                                                                <option value="Yes">Yes</option>
                                                                <option value="No">No</option>
                                                                <option value="N/A">N/A</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td style="vertical-align: middle;">
                                                        <div style="margin: auto; display: flex; justify-content: center;">
                                                            <textarea name="checklist_lab_inv[{{ $loop->index }}][remark]" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>

                        <div class="button-block">
                            <button type="submit" id="ChangesaveButton" class="saveButton on-submit-disable-button">Save</button>
                            <button type="button" class="backButton" onclick="previousStep()">Back</button>
                            <button type="button" id="ChangeNextButton" class="nextButton"
                                onclick="nextStep()">Next</button>
                            <button type="button"> <a href="{{ url('rcms/qms-dashboard') }}" class="text-white">
                                    Exit </a> </button>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Preliminary Lab Inv. Conclusion -->
            <div id="CCForm3" class="inner-block cctabcontent">
                <div class="inner-block-content">
                    <div class="sub-head">Investigation Conclusion</div>
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="group-input">
                                <label for="Description Deviation">Summary of Preliminary Investigation.</label>
                                <textarea class="summernote" name="summary_of_prelim_investiga_plic" id="summernote-1"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="group-input">
                                <label for="Lead Auditor">Root Cause Identified</label>
                                <!-- <div class="text-primary">Please Choose the relevent units</div> -->
                                <select name="root_cause_identified_plic">
                                    <option value="">Enter Your Selection Here</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="group-input">
                                <label for="Audit Team"> OOS Category-Root Cause Ident.</label>
                                <select name="oos_category_root_cause_ident_plic">
                                    <option value="">Enter Your Selection Here</option>
                                    <option value="Analyst Error">Analyst Error</option>
                                    <option value="Instrument Error">Instrument Error</option>
                                    <option value="Product/Material Related Error">Product/Material Related Error</option>
                                    <option value="Other Error">Other Error</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <div class="group-input">
                                <label for="Description Deviation">OOS Category (Others)</label>
                               <textarea class="summernote" name="oos_category_others_plic" id="summernote-1">
                                    </textarea>
                            </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <div class="group-input">
                                <label for="Description Deviation">Root Cause Details</label>
                                <!-- <div><small class="text-primary">Please insert "NA" in the data field if it does not require completion</small></div> -->
                                <textarea class="summernote" name="root_cause_details_plic" id="summernote-1">
                                    </textarea>
                            </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <div class="group-input">
                                <label for="Description Deviation">OOS Category-Root Cause Ident.</label>
                                <!-- <div><small class="text-primary">Please insert "NA" in the data field if it does not require completion</small></div> -->
                                <textarea class="summernote" name="Description_Deviation" id="summernote-1">
                                    </textarea>
                            </div>
                        </div>

                      
                        <div class="col-lg-6">
                            <div class="group-input">
                                <label for="Product/Material Name">CAPA Required</label>
                                <select name="capa_required_plic">
                                <option value="">--Select---</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="group-input">
                                <label for="Audit Agenda">Reference CAPA No.</label>
                                <input type="text" name="reference_capa_no_plic">
                            </div>
                        </div>

                        <div class="col-md-12 mb-4">
                            <div class="group-input">
                                <label for="Description Deviation">Delay Justification for Preliminary Investigation</label>
                                <!-- <div><small class="text-primary">Please insert "NA" in the data field if it does not require completion</small></div> -->
                                <textarea class="summernote" name="delay_justification_for_pi_plic" id="summernote-1">
                                    </textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="group-input">
                                <label for="Audit Attachments">Supporting Attachment</label>
                                <small class="text-primary">
                                    Please Attach all relevant or supporting documents
                                </small>
                                <div class="file-attachment-field">
                                    <div class="file-attachment-list" id="supporting_attachment_plic"></div>
                                    <div class="add-btn">
                                        <div>Add</div>
                                        <input type="file" id="myfile" name="supporting_attachment_plic[]"
                                            oninput="addMultipleFiles(this, 'supporting_attachment_plic')" multiple>
                                    </div>
                                </div>

                            </div>
                        </div>
                       

                        <div class="button-block">
                            <button type="submit" id="ChangesaveButton" class="saveButton on-submit-disable-button">Save</button>
                            <button type="button" class="backButton" onclick="previousStep()">Back</button>
                            <button type="button" id="ChangeNextButton" class="nextButton"
                                onclick="nextStep()">Next</button>
                            <button type="button"> <a href="{{ url('rcms/qms-dashboard') }}" class="text-white">
                                    Exit </a> </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Preliminary Lab Invst. Review--->
            <div id="CCForm4" class="inner-block cctabcontent">
                <div class="inner-block-content">
                    <div class="sub-head">Preliminary Lab Invstigation Review</div>
                    <div class="row">

                        <div class="col-md-12 mb-4">
                            <div class="group-input">
                                <label for="Description Deviation">Review Comments</label>
                                <!-- <div><small class="text-primary">Please insert "NA" in the data field if it does not require completion</small></div> -->
                                <textarea class="summernote" name="review_comments_plir" id="summernote-1">
                                    </textarea>
                            </div>
                        </div>

                        <div class="sub-head">OOS Review for Similar Nature</div>

                        <!-- ---------------------------grid-1 ---Preliminary Lab Invst. Review----------------------------- -->
                        <div class="group-input">
                            <label for="audit-agenda-grid">
                                Info. On Product/ Material
                                <button type="button" name="audit-agenda-grid" id="oos_capa">+</button>
                                <span class="text-primary" data-bs-toggle="modal"
                                    data-bs-target="#document-details-field-instruction-modal"
                                    style="font-size: 0.8rem; font-weight: 400; cursor: pointer;">
                                    (Launch Instruction)
                                </span>
                            </label>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="oos_capa_details" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th style="width: 4%">Row#</th>
                                            <th style="width: 8%">OOS Number</th>
                                            <th style="width: 16%"> OOS Reported Date</th>
                                            <th style="width: 12%">Description of OOS</th>
                                            <th style="width: 8%">Previous OOS Root Cause</th>
                                            <th style="width: 8%"> CAPA</th>
                                            <th style="width: 16% pt-3">Closure Date of CAPA</th>
                                            <th style="width: 16%">CAPA Requirement</th>
                                            <th style="width: 16%">Reference CAPA Number</th>
                                            <th style="width: 4%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input disabled type="text" name="oos_capa[0][serial]" value="1"></td>
                                            <td><input type="text" id="info_oos_number" name="oos_capa[0][info_oos_number]" value=""></td>
                                            <td>
                                            <div class="col-lg-6 new-date-data-field">
                                                <div class="group-input input-date">
                                                    <div class="calenderauditee">
                                                        <input type="text" id="info_oos_reported_date" readonly 
                                                        placeholder="DD-MM-YYYY" />
                                                        <input type="date" name="oos_capa[0][info_oos_reported_date]" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"
                                                        class="hide-input" oninput="handleDateInput(this, 'info_oos_reported_date')">
                                                    </div>
                                                </div>
                                            </div>
                                            </td>
                                            <td><input type="text" name="oos_capa[0][info_oos_description]" value=""></td>
                                            <td><input type="text" name="oos_capa[0][info_oos_previous_root_cause]"value=""></td>
                                            <td><input type="text" name="oos_capa[0][info_oos_capa]" value=""></td>
                                            <td>
                                                <div class="col-lg-6 new-date-data-field">
                                                <div class="group-input input-date">
                                                    <div class="calenderauditee">
                                                        <input type="text" id="info_oos_closure_date" readonly 
                                                        placeholder="DD-MM-YYYY" />
                                                        <input type="date" name="oos_capa[0][info_oos_closure_date]" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"
                                                        class="hide-input" oninput="handleDateInput(this, 'info_oos_closure_date')">
                                                    </div>
                                                </div>
                                            </div>
                                            </td>
                                            <td><select name="oos_capa[0][info_oos_capa_requirement]">
                                                   <option value="">Select Option</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select></td>
                                            <td><input type="text" name="oos_capa[0][info_oos_capa_reference_number]" value=""></td> 
                                            <td><button type="text" class="removeRowBtn">Remove</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="group-input">
                                <label for="Audit Start Date"> Phase II Inv. Required?</label>
                                <select name="phase_ii_inv_required_plir">
                                <option value="">Enter Your Selection Here</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="group-input">
                                <label for="Audit Attachments"> Supporting Attachments</label>
                                <small class="text-primary">
                                    Please Attach all relevant or supporting documents
                                </small>
                                <div class="file-attachment-field">
                                    <div class="file-attachment-list" id="supporting_attachments_plir"></div>
                                    <div class="add-btn">
                                        <div>Add</div>
                                        <input type="file" id="myfile" name="supporting_attachments_plir[]"
                                            oninput="addMultipleFiles(this, 'supporting_attachments_plir')" multiple>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="button-block">
                            <button type="submit" id="ChangesaveButton" class="saveButton on-submit-disable-button">Save</button>
                            <button type="button" class="backButton" onclick="previousStep()">Back</button>
                            <button type="button" id="ChangeNextButton" class="nextButton"
                                onclick="nextStep()">Next</button>
                            <button type="button"> <a href="{{ url('rcms/qms-dashboard') }}" class="text-white">
                                    Exit </a> </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('frontend.OOS.oos_allchecklist')

        <!--Phase II Investigation -->
        <div id="CCForm5" class="inner-block cctabcontent">
            <div class="inner-block-content">
                <div class="sub-head">
                    Phase II Investigation
                </div>
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="group-input">
                            <label for="Description Deviation">QA Approver Comments</label>
                            <textarea class="summernote" name="qa_approver_comments_piii" id="summernote-1">
                            </textarea>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="group-input">
                            <label for="Description Deviation">Reason for manufacturing </label>
                            <textarea class="summernote" name="reason_manufacturing_piii" id="summernote-1">
                            </textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="group-input">
                            <label for="Report Attachments"> Manufact. Invest. Required? </label>
                            <select name="manufact_invest_required_piii">
                                <option value="">Enter Your Selection Here</option>
                                <option value="no">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="group-input">
                            <label for="Auditee"> Manufacturing Invest. Type </label>
                            <select name="manufacturing_invest_type_piii" placeholder="Select Nature of Deviation"
                                data-search="false" data-silent-initial-value-set="true" id="auditee">
                                <option value="">Enter Your Selection Here</option>
                                <option value="Chemical">Chemical</option>
                                <option value="Microbiology">Microbiology</option>
                            </select>
                        </div>
                    </div>
                   
                    
                    <div class="col-12">
                        <div class="group-input">
                            <label for="Audit Comments"> Audit Comments </label>
                            <textarea class="summernote" name="audit_comments_piii" id="summernote-1">
                            </textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="group-input">
                            <label for="Audit Attachments"> Hypo/Exp. Required</label>
                            <select name="hypo_exp_required_piii">
                                <option value="">Enter Your Selection Here</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>

                            </select>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="group-input">
                            <label for="Reference Recores">Hypo/Exp. Reference</label>
                            <textarea class="summernote" name="hypo_exp_reference_piii" id="summernote-1">
                            </textarea>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="group-input">
                            <label for="Audit Attachments"> Attachment</label>
                            <small class="text-primary">
                                Please Attach all relevant or supporting documents
                            </small>
                            <div class="file-attachment-field">
                                <div class="file-attachment-list" id="file_attachments_pII"></div>
                                <div class="add-btn">
                                    <div>Add</div>
                                    <input type="file" id="myfile" name="file_attachments_pII[]"
                                        oninput="addMultipleFiles(this, 'file_attachments_pII')" multiple>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="button-block">
                        <button type="submit" id="ChangesaveButton" class="saveButton on-submit-disable-button">Save</button>
                        <button type="button" class="backButton" onclick="previousStep()">Back</button>
                        <button type="button" id="ChangeNextButton" class="nextButton"
                            onclick="nextStep()">Next</button>
                        <button type="button"> <a href="{{ url('rcms/qms-dashboard') }}" class="text-white">
                                Exit </a> </button>
                    </div>

                </div>
            </div>
        </div>
@php
    $phase_two_inv_questions = array(
        "Is correct batch manufacturing record used?",
        "Correct quantities of correct ingredients were used in manufacturing?",
        "Balances used in dispensing / verification were calibrated using valid standard weights?",
        "Equipment used in the manufacturing is as per batch manufacturing record?",
        "Processing steps followed in correct sequence as per the BMR?",
        "Whether material used in the batch had any OOS result?",
        "All the processing parameters were within the range specified in BMR?",
        "Environmental conditions during manufacturing are as per BMR?",
        "Whether there was any deviation observed during manufacturing?",
        "The yields at different stages were within the acceptable range as per BMR?",
        "All the equipment’s used during manufacturing are calibrated?",
        "Whether there is malfunctioning or breakdown of equipment during manufacturing?",
        "Whether the processing equipment was maintained as per preventive maintenance schedule?",
        "All the in-process checks were carried out as per the frequency given in BMR & the results were within acceptance limit?",
        "Whether there were any failures of utilities (like Power, Compressed air, steam etc.) during manufacturing?",
        "Whether other batches/products impacted?",
        "Any Other"
    );

@endphp
        <!--CheckList Phase II Investigation -->
        <div id="CCForm19" class="inner-block cctabcontent">
            <div class="inner-block-content">
                <div class="sub-head">
                    CheckList - Phase II Investigation
                </div>
                <div class="row">
                    <div class="col-12">
                    <center>
                        <label style="font-weight: bold; for="Audit Attachments">PHASE II OOS INVESTIGATION</label>
                    </center>
                        <!-- <label for="Reference Recores">PHASE II OOS INVESTIGATION </label> -->
                        <div class="group-input">
                            <div class="why-why-chart">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 5%;">Sr.No.</th>
                                            <th style="width: 40%;">Question</th>
                                            <th style="width: 20%;">Response</th>
                                            <th>Remarks</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($phase_two_inv_questions as $phase_two_inv_question)
                                            <tr>
                                                <td class="flex text-center">{{ $loop->index+1 }}</td>
                                                <td>{{ $phase_two_inv_question }}</td>
                                                <td>
                                                    <div style="display: flex; justify-content: space-around; align-items: center;  margin: 5%; gap:5px">
                                                        <select name="phase_two_inv[{{ $loop->index }}][response]" id="response" style="padding: 2px; width:90%; border: 1px solid black;  background-color: #f0f0f0;">
                                                            <option value="">Select an Option</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                            <option value="N/A">N/A</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <textarea name="phase_two_inv[{{ $loop->index }}][remarks]" style="border-radius: 7px; border: 1.5px solid black;"></textarea>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="button-block">
                        <button type="submit" id="ChangesaveButton" class="saveButton on-submit-disable-button">Save</button>
                        <button type="button" class="backButton" onclick="previousStep()">Back</button>
                        <button type="button" id="ChangeNextButton" class="nextButton"
                            onclick="nextStep()">Next</button>
                        <button type="button"> <a href="{{ url('rcms/qms-dashboard') }}" class="text-white">
                                Exit </a> </button>
                    </div>

                </div>
            </div>
        </div>
        <!-- Phase II QC Review -->
        <div id="CCForm6" class="inner-block cctabcontent">
            <div class="inner-block-content">
                <div class="sub-head">Summary of Phase II Testing</div>
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="group-input">
                            <label for="Description Deviation">Summary of Exp./Hyp.</label>
                            <!-- <div><small class="text-primary">Please insert "NA" in the data field if it does not require completion</small></div> -->
                            <textarea class="summernote" name="summary_of_exp_hyp_piiqcr" id="summernote-1">
                                    </textarea>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="group-input">
                            <label for="Description Deviation">Summary Mfg. Investigation</label>
                            <!-- <div><small class="text-primary">Please insert "NA" in the data field if it does not require completion</small></div> -->
                            <textarea class="summernote" name="summary_mfg_investigation_piiqcr" id="summernote-1">
                                    </textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="group-input">
                            <label for="Cancelled By"> Root Casue Identified. </label>
                            <select name="root_casue_identified_piiqcr">
                                <option value="">Select an Option</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="group-input">
                            <label for="Cancelled By">OOS Category-Reason identified </label>
                            <select name="oos_category_reason_identified_piiqcr">
                                <option value="">Enter Your Selection Here</option>
                                <option value="Analyst Error">Analyst Error</option>
                                <option value="Instrument Error">Instrument Error</option>
                                <option value="Product/Material Related Error">Product/Material Related Error</option>
                                <option value="Other Error">Other Error</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="group-input">
                            <label for="Audit Preparation Completed On">Others (OOS category)</label>
                            <input type="text" name="others_oos_category_piiqcr">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="group-input">
                            <label for="Details of Obvious Error">Details of Obvious Error</label>
                            <input type="text" name="oos_details_obvious_error">
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="group-input">
                            <label for="Description Deviation">Details of Root Cause</label>
                            <!-- <div><small class="text-primary">Please insert "NA" in the data field if it does not require completion</small></div> -->
                            <textarea class="summernote" name="details_of_root_cause_piiqcr" id="summernote-1">
                            </textarea>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="group-input">
                            <label for="Description Deviation">Details of Root Cause</label>
                            <!-- <div><small class="text-primary">Please insert "NA" in the data field if it does not require completion</small></div> -->
                            <textarea class="summernote" name="details_of_root_cause_piiqcr" id="summernote-1">
                                    </textarea>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="group-input">
                            <label for="Description Deviation">Impact Assessment.</label>
                            <textarea class="summernote" name="impact_assessment_piiqcr" id="summernote-1">
                            </textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="group-input">
                            <label for="Audit Lead More Info Reqd On">Attachments </label>
                            <small class="text-primary">
                                Please Attach all relevant or supporting documents
                            </small>
                            <div class="file-attachment-field">
                                <div class="file-attachment-list" id="attachments_piiqcr"></div>
                                <div class="add-btn">
                                    <div>Add</div>
                                    <input type="file" id="myfile" name="attachments_piiqcr[]"
                                        oninput="addMultipleFiles(this, 'attachments_piiqcr')" multiple>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="button-block">
                        <button type="submit" id="ChangesaveButton" class="saveButton on-submit-disable-button">Save</button>
                        <button type="button" class="backButton" onclick="previousStep()">Back</button>
                        <button type="button" id="ChangeNextButton" class="nextButton"
                            onclick="nextStep()">Next</button>
                        <button type="button"> <a href="{{ url('rcms/qms-dashboard') }}" class="text-white">
                                Exit </a> </button>
                    </div>




                </div>
            </div>
        </div>
        
        <!--Additional Testing Proposal  -->
        <div id="CCForm7" class="inner-block cctabcontent">
            <div class="inner-block-content">
                <div class="sub-head">
                    Additional Testing Proposal by QA
                </div>
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="group-input">
                            <label for="Description Deviation">Review Comment</label>
                            <!-- <div><small class="text-primary">Please insert "NA" in the data field if it does not require completion</small></div> -->
                            <textarea class="summernote" name="review_comment_atp" id="summernote-1">
                                    </textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="group-input">
                            <label for="Report Attachments"> Additional Test Proposal </label>
                            <select name="additional_test_proposal_atp">
                                <option value="">Enter Your Selection Here</option>
                                <option value="">Select an Option</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="group-input">
                            <label for="Reference Recores">Additional Test Comment.
                            </label>
                            <textarea class="summernote" name="additional_test_reference_atp" id="summernote-1">
                            </textarea>
                        </div>
                    </div>
                   
                    <div class="col-lg-6">
                        <div class="group-input">
                            <label for="Audit Attachments"> Any Other Actions Required</label>
                            <select name="any_other_actions_required_atp">
                                <option value="">Select an Option</option>
                                <option value="Yes">Yes</option>
                                <option name="No">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="group-input">
                            <label for="Reference Recores">Additional Testing Attachment </label>
                            <small class="text-primary">
                                Please Attach all relevant or supporting documents
                            </small>
                            <div class="file-attachment-field">
                                <div class="file-attachment-list" id="additional_testing_attachment_atp"></div>
                                <div class="add-btn">
                                    <div>Add</div>
                                    <input type="file" id="myfile" name="additional_testing_attachment_atp[]"
                                        oninput="addMultipleFiles(this, 'additional_testing_attachment_atp')" multiple>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="button-block">
                        <button type="submit" id="ChangesaveButton" class="saveButton on-submit-disable-button">Save</button>
                        <button type="button" class="backButton" onclick="previousStep()">Back</button>
                        <button type="button" id="ChangeNextButton" class="nextButton"
                            onclick="nextStep()">Next</button>
                        <button type="button"> <a href="{{ url('rcms/qms-dashboard') }}" class="text-white">
                                Exit </a> </button>
                    </div>
                </div>
            </div>
        </div>
        <!--OOS Conclusion  -->
        <div id="CCForm8" class="inner-block cctabcontent">
            <div class="inner-block-content">
                <div class="sub-head">
                    Conclusion Comments
                </div>
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="group-input">
                            <label for="Description Deviation">Conclusion Comments</label>
                            <!-- <div><small class="text-primary">Please insert "NA" in the data field if it does not require completion</small></div> -->
                            <textarea class="summernote" name="conclusion_comments_oosc" id="summernote-1">
                                    </textarea>
                        </div>
                    </div>


                    <!-- ---------------------------grid-1 -------------------------------- -->
                    <div class="group-input">
                        <label for="audit-agenda-grid">
                            Summary of OOS Test Results
                            <button type="button" name="audit-agenda-grid" id="oos_conclusion">+</button>
                            <span class="text-primary" data-bs-toggle="modal"
                                data-bs-target="#document-details-field-instruction-modal"
                                style="font-size: 0.8rem; font-weight: 400; cursor: pointer;">
                                (Launch Instruction)
                            </span>
                        </label>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="oos_conclusion_details" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th style="width: 4%">Row#</th>
                                        <th style="width: 16%">Analysis Detials</th>
                                        <th style="width: 16%">Hypo./Exp./Add.Test PR No.</th>
                                        <th style="width: 16%">Results</th>
                                        <th style="width: 16%">Analyst Name.</th>
                                        <th style="width: 16%">Remarks</th>
                                        <th style="width: 16%">Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                     <td><input disabled type="text" name="oos_conclusion[0][serial]" value="1"></td>
                                    <td><input type="text" name="oos_conclusion[0][summary_results_analysis_detials]"></td>
                                    <td><input type="text" name="oos_conclusion[0][summary_results_hypothesis_experimentation_test_pr_no]"></td>
                                    <td><input type="text" name="oos_conclusion[0][summary_results]"></td>
                                    <td><input type="text" name="oos_conclusion[0][summary_results_analyst_name]"></td>
                                    <td><input type="text" name="oos_conclusion[0][summary_results_remarks]"></td> 
                                    <td><button type="text" class="removeRowBtn">Remove</button></td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="group-input">
                            <label for="Report Attachments">Specification Limit </label>
                            <input type="text" name="specification_limit_oosc">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="group-input">
                            <label for="Audit Attachments">Results to be Reported</label>
                            <select name="results_to_be_reported_oosc">
                                <option value="">Select an Option</option>
                                <option value="Intial">Initial</option>
                                <option value="Retested result">Retested Result</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="group-input">
                            <label for="Reference Recores">Final Reportable Results</label>
                            <input type="text" name="final_reportable_results_oosc">
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="group-input">
                            <label for="Description Deviation">Justifi. for Averaging Results</label>
                            <!-- <div><small class="text-primary">Please insert "NA" in the data field if it does not require completion</small></div> -->
                            <textarea class="summernote" name="justifi_for_averaging_results_oosc" id="summernote-1">
                                    </textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="group-input">
                            <label for="Reference Recores">OOS Stands </label>
                            <select name="oos_stands_oosc">
                                <option value="">Select an Option</option>
                                <option value="Valid">Valid</option>
                                <option value="Invalid">Invalid</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="group-input">
                            <label for="Audit Attachments">CAPA Req.</label>
                            <select name="capa_req_oosc">
                                <option value="">Select an Option</option>
                                <option name="Yes">Yes</option>
                                <option name="No">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="group-input">
                            <label for="Reference Recores">CAPA Ref No.</label>
                            <select multiple id="reference_record" name="capa_ref_no_oosc" id="">
                                <option value="">--Select---</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="group-input">
                            <label for="Description Deviation">Justify if CAPA not required</label>
                            <!-- <div><small class="text-primary">Please insert "NA" in the data field if it does not require completion</small></div> -->
                            <textarea class="summernote" name="justify_if_capa_not_required_oosc" id="summernote-1">
                                    </textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="group-input">
                            <label for="Audit Attachments">Action Item Req.</label>
                            <select name="action_plan_req_oosc">
                                <option value="">Select an Option</option>
                                 <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="group-input">
                            <label for="Reference Recores">Action Item Ref.</label>
                            <select multiple id="reference_record" name="action_plan_ref_oosc[]" id="">
                                <option value="">--Select---</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="group-input">
                            <label for="Description Deviation">Justification for Delay</label>
                            <!-- <div><small class="text-primary">Please insert "NA" in the data field if it does not require completion</small></div> -->
                            <textarea class="summernote" name="justification_for_delay_oosc" id="summernote-1">
                                    </textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="group-input">
                            <label for="Reference Recores">Attachments if Any</label>
                            <small class="text-primary">
                                Please Attach all relevant or supporting documents
                            </small>
                            <div class="file-attachment-field">
                                <div class="file-attachment-list" id="file_attachments_if_any_ooscattach"></div>
                                <div class="add-btn">
                                    <div>Add</div>
                                    <input type="file" id="myfile" name="file_attachments_if_any_ooscattach[]"
                                        oninput="addMultipleFiles(this, 'file_attachments_if_any_ooscattach')" multiple>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="button-block">
                        <button type="submit" id="ChangesaveButton" class="saveButton on-submit-disable-button">Save</button>
                        <button type="button" class="backButton" onclick="previousStep()">Back</button>
                        <button type="button" id="ChangeNextButton" class="nextButton"
                            onclick="nextStep()">Next</button>
                        <button type="button"> <a href="{{ url('rcms/qms-dashboard') }}" class="text-white">
                                Exit </a> </button>
                    </div>

                </div>
            </div>
        </div>
        <!--OOS Conclusion Review -->
        <div id="CCForm9" class="inner-block cctabcontent">
            <div class="inner-block-content">
                <div class="sub-head">
                    Conclusion Review Comments
                </div>
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="group-input">
                            <label for="Description Deviation">Conclusion Review Comments</label>
                            <!-- <div><small class="text-primary">Please insert "NA" in the data field if it does not require completion</small></div> -->
                            <textarea class="summernote" name="conclusion_review_comments_ocr" id="summernote-1">
                                    </textarea>
                        </div>
                    </div>


                    <!-- ---------------------------grid-1 ------"OOSConclusion_Review-------------------------- -->
                    <div class="group-input">
                        <label for="audit-agenda-grid">
                            Summary of OOS Test Results
                            <button type="button" name="audit-agenda-grid" id="oosconclusion_review">+</button>
                            <span class="text-primary" data-bs-toggle="modal"
                                data-bs-target="#document-details-field-instruction-modal"
                                style="font-size: 0.8rem; font-weight: 400; cursor: pointer;">
                                (Launch Instruction)
                            </span>
                        </label>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="oosconclusion_review_details"
                                style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th style="width: 4%">Row#</th>
                                        <th style="width: 16%">Material/Product Name</th>
                                        <th style="width: 16%">Batch No.(s) / A.R. No. (s)</th>
                                        <th style="width: 16%">Any Other Information</th>
                                        <th style="width: 16%">Action Taken on Affec.batch</th>
                                        <th style="width: 5%"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td><input disabled type="text" name="oos_conclusion_review[0][serial]" value="1"></td>
                                    <td><input type="text" name="oos_conclusion_review[0][conclusion_review_product_name]"></td>
                                    <td><input type="text" name="oos_conclusion_review[0][conclusion_review_batch_no]"></td>
                                    <td><input type="text" name="oos_conclusion_review[0][conclusion_review_any_other_information]"></td>
                                    <td><input type="text" name="oos_conclusion_review[0][conclusion_review_action_affecte_batch]"></td>
                                    <td><button type="text" class="removeRowBtn">Remove</button></td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="group-input">
                            <label for="Description Deviation">Action Taken on Affec.batch</label>
                            <!-- <div><small class="text-primary">Please insert "NA" in the data field if it does not require completion</small></div> -->
                            <textarea class="summernote" name="action_taken_on_affec_batch_ocr" id="summernote-1">
                                    </textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="group-input">
                            <label for="Audit Attachments">CAPA Req?</label>
                            <select name="capa_req_ocr">
                                <option value="">Select an Option</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="group-input">
                            <label for="Reference Recores">CAPA Refer.</label>
                            <select multiple id="reference_record" name="capa_refer_ocr[]" id="">
                                <option value="">--Select---</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="group-input">
                            <label for="Description Deviation">Justify if No Risk Assessment</label>
                            <!-- <div><small class="text-primary">Please insert "NA" in the data field if it does not require completion</small></div> -->
                            <textarea class="summernote" name="justify_if_no_risk_assessment_ocr" id="summernote-1">
                                    </textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="group-input">
                            <label for="Reference Recores">Conclusion Attachment</label>
                            <small class="text-primary">
                                Please Attach all relevant or supporting documents
                            </small>
                            <div class="file-attachment-field">
                                <div class="file-attachment-list" id="conclusion_attachment_ocr"></div>
                                <div class="add-btn">
                                    <div>Add</div>
                                    <input type="file" id="myfile" name="conclusion_attachment_ocr[]"
                                        oninput="addMultipleFiles(this, 'conclusion_attachment_ocr')" multiple>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="group-input">
                            <label for="Audit Attachments">CQ Approver</label>
                            <input type="text" name="cq_approver">
                        </div>
                    </div>

                    <div class="button-block">
                        <button type="submit" id="ChangesaveButton" class="saveButton on-submit-disable-button">Save</button>
                        <button type="button" class="backButton" onclick="previousStep()">Back</button>
                        <button type="button" id="ChangeNextButton" class="nextButton"
                            onclick="nextStep()">Next</button>
                        <button type="button"> <a href="{{ url('rcms/qms-dashboard') }}" class="text-white">
                                Exit </a> </button>
                    </div>
                </div>
            </div>
        </div>
        <!--CQ Review Comments -->
        <div id="CCForm10" class="inner-block cctabcontent">
            <div class="inner-block-content">
                <div class="sub-head">
                    CQ Review Comments
                </div>
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="group-input">
                            <label for="Description Deviation">CQ Review comments</label>
                            <!-- <div><small class="text-primary">Please insert "NA" in the data field if it does not require completion</small></div> -->
                            <textarea class="summernote" name="cq_review_comments_ocqr" id="summernote-1">
                                    </textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="group-input">
                            <label for="Audit Attachments"> CQ Attachment</label>
                            <small class="text-primary">
                                Please Attach all relevant or supporting documents
                            </small>
                            <div class="file-attachment-field">
                                <div class="file-attachment-list" id="cq_attachment_ocqr"></div>
                                <div class="add-btn">
                                    <div>Add</div>
                                    <input type="file" id="myfile" name="cq_attachment_ocqr[]"
                                        oninput="addMultipleFiles(this, 'cq_attachment_ocqr')" multiple>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="button-block">
                        <button type="submit" id="ChangesaveButton" class="saveButton on-submit-disable-button">Save</button>
                        <button type="button" class="backButton" onclick="previousStep()">Back</button>
                        <button type="button" id="ChangeNextButton" class="nextButton"
                            onclick="nextStep()">Next</button>
                        <button type="button"> <a href="{{ url('rcms/qms-dashboard') }}" class="text-white">
                                Exit </a> </button>
                    </div>
                </div>

            </div>
        </div>
       
        <!-- Re-Open -->
        <div id="CCForm12" class="inner-block cctabcontent">
            <div class="inner-block-content">
                <div class="sub-head">
                    Reopen Request
                </div>
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="group-input">
                            <label for="Description Deviation">Other Action (Specify)</label>
                            <textarea class="summernote" name="other_action_specify_ro" id="summernote-1">
                            </textarea>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="group-input">
                            <label for="Reference Recores">Reopen Attachment</label>
                            <small class="text-primary">
                                Please Attach all relevant or supporting documents
                            </small>
                            <div class="file-attachment-field">
                                <div class="file-attachment-list" id="reopen_attachment_ro"></div>
                                <div class="add-btn">
                                    <div>Add</div>
                                    <input type="file" id="myfile" name="reopen_attachment_ro[]"
                                        oninput="addMultipleFiles(this, 'reopen_attachment_ro')" multiple>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="button-block">
                        <button type="submit" id="ChangesaveButton" class="saveButton on-submit-disable-button">Save</button>
                        <button type="button" class="backButton" onclick="previousStep()">Back</button>
                        <button type="button" id="ChangeNextButton" class="nextButton"
                            onclick="nextStep()">Next</button>
                        <button type="button"> <a href="{{ url('rcms/qms-dashboard') }}" class="text-white">
                                Exit </a> </button>
                    </div>
                </div>
            </div>

        </div>
        <!--QA Head/Designee Approval -->
        <div id="CCForm13" class="inner-block cctabcontent">
            <div class="inner-block-content">
                <div class="sub-head">
                QA Head/Designee Approval
                </div>
                <div class="row">
                <div class="col-md-12 mb-4">
                    <div class="group-input">
                        <label for="Description Deviation"> FAR (Field alert) </label>
                        <textarea class="summernote" name="Field_alert_QA_initial_approval" id="summernote-1">
                        </textarea>
                    </div>
                </div>   
                <div class="col-md-12 mb-4">
                    <div class="group-input">
                        <label for="Description Deviation"> Approval Comments </label>
                        <textarea class="summernote" name="reopen_approval_comments_uaa" id="summernote-1">
                        </textarea>
                    </div>
                </div>
                    <div class="col-12">
                        <div class="group-input">
                            <label for="Reference Recores">Approval Attachment</label>
                            <small class="text-primary">
                                Please Attach all relevant or supporting documents
                            </small>
                            <div class="file-attachment-field">
                                <div class="file-attachment-list" id="addendum_attachment_uaa"></div>
                                <div class="add-btn">
                                    <div>Add</div>
                                    <input type="file" id="myfile" name="addendum_attachment_uaa[]"
                                        oninput="addMultipleFiles(this, 'addendum_attachment_uaa')" multiple>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sub-head"> Batch Disposition </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="group-input">
                            <label for="Audit Attachments">OOS Category</label>
                             <select name="oos_category_bd">
                                <option value="">Enter Your Selection Here</option>
                                <option value="default">Enter Your Selection Here</option>
                                <option value="Analyst Error">Analyst Error</option>
                                <option value="Instrument Error">Instrument Error</option>
                                <option value="Procedure Error">Procedure Error</option>
                                <option value="Product Related Error">Product Related Error</option>
                                <option value="Material Related Error">Material Related Error</option>
                                <option value="Other Error">Other Error</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="group-input">
                            <label for="Reference Recores">Other's</label>
                            <input type="text" name="others_bd">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="group-input">
                        <label for="Reference Recores">Material/Batch Release</label>
                        <select name="material_batch_release_bd">
                            <option value="">Enter Your Selection Here</option>
                            <option value="release">To Be Released</option>
                            <option value="reject">To Be Rejected</option>
                            <option value="other">Other Action (Specify)</option>
                        </select>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="group-input">
                            <label for="Description Deviation">Other Action (Specify)</label>
                            <textarea class="summernote" name="other_action_bd" id="summernote-1">
                            </textarea>
                        </div>
                    </div>
                    
                    <div class="sub-head">Assessment for batch disposition</div>
                    <div class="col-md-12 mb-4">
                        <div class="group-input">
                            <label for="Description Deviation">Other Parameters Results</label>
                            <textarea class="summernote" name="other_parameters_results_bd" id="summernote-1">
                            </textarea>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="group-input">
                            <label for="Description Deviation">Trend of Previous Batches</label>
                            <!-- <div><small class="text-primary">Please insert "NA" in the data field if it does not require completion</small></div> -->
                            <textarea class="summernote" name="trend_of_previous_batches_bd" id="summernote-1">
                                    </textarea>
                        </div>

                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="group-input">
                            <label for="Description Deviation">Stability Data</label>
                            <!-- <div><small class="text-primary">Please insert "NA" in the data field if it does not require completion</small></div> -->
                            <textarea class="summernote" name="stability_data_bd" id="summernote-1">
                                    </textarea>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="group-input">
                            <label for="Description Deviation">Process Validation Data</label>
                            <!-- <div><small class="text-primary">Please insert "NA" in the data field if it does not require completion</small></div> -->
                            <textarea class="summernote" name="process_validation_data_bd" id="summernote-1">
                                    </textarea>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="group-input">
                            <label for="Description Deviation">Method Validation </label>
                            <!-- <div><small class="text-primary">Please insert "NA" in the data field if it does not require completion</small></div> -->
                            <textarea class="summernote" name="method_validation_bd" id="summernote-1">
                                    </textarea>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="group-input">
                            <label for="Description Deviation">Any Market Complaints </label>
                            <!-- <div><small class="text-primary">Please insert "NA" in the data field if it does not require completion</small></div> -->
                            <textarea class="summernote" name="any_market_complaints_bd" id="summernote-1">
                            </textarea>
                        </div>
                    </div>

                    <div class="col-md-12 mb-4">
                        <div class="group-input">
                            <label for="Description Deviation">Statistical Evaluation </label>
                            <!-- <div><small class="text-primary">Please insert "NA" in the data field if it does not require completion</small></div> -->
                            <textarea class="summernote" name="statistical_evaluation_bd" id="summernote-1">
                            </textarea>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="group-input">
                            <label for="Description Deviation">Risk Analysis for Disposition </label>
                            <!-- <div><small class="text-primary">Please insert "NA" in the data field if it does not require completion</small></div> -->
                            <textarea class="summernote" name="risk_analysis_disposition_bd" id="summernote-1">
                            </textarea>
                        </div>

                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="group-input">
                            <label for="Description Deviation">Conclusion </label>
                            <!-- <div><small class="text-primary">Please insert "NA" in the data field if it does not require completion</small></div> -->
                            <textarea class="summernote" name="conclusion_bd" id="summernote-1">
                            </textarea>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="group-input">
                            <label for="Description Deviation">Justify for Delay in Activity</label>
                            <!-- <div><small class="text-primary">Please insert "NA" in the data field if it does not require completion</small></div> -->
                            <textarea class="summernote" name="justify_for_delay_in_activity_bd" id="summernote-1">
                                    </textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="group-input">
                            <label for="Reference Recores">Disposition Attachment</label>
                            <small class="text-primary">
                                Please Attach all relevant or supporting documents
                            </small>
                            <div class="file-attachment-field">
                                <div class="file-attachment-list" id="disposition_attachment_bd"></div>
                                <div class="add-btn">
                                    <div>Add</div>
                                    <input type="file" id="myfile" name="disposition_attachment_bd[]"
                                        oninput="addMultipleFiles(this, 'disposition_attachment_bd')" multiple>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="button-block">
                        <button type="submit" id="ChangesaveButton" class="saveButton on-submit-disable-button">Save</button>
                        <button type="button" class="backButton" onclick="previousStep()">Back</button>
                        <button type="button" id="ChangeNextButton" class="nextButton"
                            onclick="nextStep()">Next</button>
                        <button type="button"> <a href="{{ url('rcms/qms-dashboard') }}" class="text-white">
                                Exit </a> </button>
                    </div>
                </div>
            </div>

        </div>
        <!--Under Addendum Execution -->
        <div id="CCForm14" class="inner-block cctabcontent">
            <div class="inner-block-content">
                <div class="sub-head">
                    Addendum Execution Comment
                </div>
                <div class="row">

                    <div class="col-md-12 mb-4">
                        <div class="group-input">
                            <label for="Description Deviation">Execution Comments</label>
                            <!-- <div><small class="text-primary">Please insert "NA" in the data field if it does not require completion</small></div> -->
                            <textarea class="summernote" name="execution_comments_uae" id="summernote-1">
                                    </textarea>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="group-input">
                            <label for="Reference Recores">Action Task Required?</label>
                            <select name="action_task_required_uae">
                                <option value="">Enter Your Selection Here</option>
                                <option value="yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="group-input">
                            <label for="Reference Recores">Action Task Reference No.</label>
                            <select multiple id="reference_record" name="action_task_reference_no_uae[]" id="">
                                <option value="">--Select---</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="group-input">
                            <label for="Reference Recores">Addi.Testing Req?</label>
                            <select name="addi_testing_req_uae">
                                <option value="">Enter Your Selection Here</option>
                                <option value="yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="group-input">
                            <label for="Reference Recores">Addi.Testing Ref.</label>
                            <select multiple id="reference_record" name="Addi_testing_ref_uae[]" id="">
                                <option value="">--Select---</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="group-input">
                            <label for="Reference Recores">Investigation Req.?</label>
                            <select name="investigation_req_uae">
                               <option value="">Enter Your Selection Here</option>
                                <option value="yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="group-input">
                            <label for="Reference Recores">Investigation Ref.</label>
                            <select multiple id="reference_record" name="investigation_ref_uae[]" id="">
                                <option value="">--Select---</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="group-input">
                            <label for="Reference Recores">Hypo-Exp Req?</label>
                            <select name="hypo_exp_req_uae">
                             <option value="">Enter Your Selection Here</option>
                                <option value="yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="group-input">
                            <label for="Reference Recores">Hypo-Exp Ref.</label>
                            <select multiple id="reference_record" name="hypo_exp_ref_uae[]" id="">
                               <option value="">--Select---</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="group-input">
                            <label for="Reference Recores">Addendum Attachments
                            </label>
                            <small class="text-primary">
                                Please Attach all relevant or supporting documents
                            </small>
                            <div class="file-attachment-field">
                                <div class="file-attachment-list" id="addendum_attachments_uae"></div>
                                <div class="add-btn">
                                    <div>Add</div>
                                    <input type="file" id="myfile" name="addendum_attachments_uae[]"
                                        oninput="addMultipleFiles(this, 'addendum_attachments_uae')" multiple>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="button-block">
                        <button type="submit" id="ChangesaveButton" class="saveButton on-submit-disable-button">Save</button>
                        <button type="button" class="backButton" onclick="previousStep()">Back</button>
                        <button type="button" id="ChangeNextButton" class="nextButton"
                            onclick="nextStep()">Next</button>
                        <button type="button"> <a href="{{ url('rcms/qms-dashboard') }}" class="text-white">
                                Exit </a> </button>
                    </div>
                </div>

            </div>

        </div>
        <!-- Under Addendum Review-->
        <div id="CCForm15" class="inner-block cctabcontent">
            <div class="inner-block-content">
                <div class="sub-head">
                    Under Addendum Review
                </div>
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="group-input">
                            <label for="Description Deviation">Addendum Review Comments</label>
                            <!-- <div><small class="text-primary">Please insert "NA" in the data field if it does not require completion</small></div> -->
                            <textarea class="summernote" name="addendum_review_comments_uar" id="summernote-1">
                            </textarea>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="group-input">
                            <label for="Reference Recores">Required Attachment</label>
                            <small class="text-primary">
                                Please Attach all relevant or supporting documents
                            </small>
                            <div class="file-attachment-field">
                                <div class="file-attachment-list" id="required_attachment_uar"></div>
                                <div class="add-btn">
                                    <div>Add</div>
                                    <input type="file" id="myfile" name="required_attachment_uar[]"
                                        oninput="addMultipleFiles(this, 'required_attachment_uar')" multiple>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="button-block">
                        <button type="submit" id="ChangesaveButton" class="saveButton on-submit-disable-button">Save</button>
                        <button type="button" class="backButton" onclick="previousStep()">Back</button>
                        <button type="button" id="ChangeNextButton" class="nextButton"
                            onclick="nextStep()">Next</button>
                        <button type="button"> <a href="{{ url('rcms/qms-dashboard') }}" class="text-white">
                                Exit </a> </button>
                    </div>

                </div>

            </div>

        </div>
        <!-- Under Addendum Verification -->
        <div id="CCForm16" class="inner-block cctabcontent">
            <div class="inner-block-content">
                <div class="sub-head">
                    Addendum Verification Comment
                </div>
                <div class="row">

                    <div class="col-md-12 mb-4">
                        <div class="group-input">
                            <label for="Description Deviation">Verification Comments </label>
                            <!-- <div><small class="text-primary">Please insert "NA" in the data field if it does not require completion</small></div> -->
                            <textarea class="summernote" name="verification_comments_uav" id="summernote-1">
                    </textarea>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="group-input">
                            <label for="Reference Recores">Verification Attachment</label>
                            <small class="text-primary">
                                Please Attach all relevant or supporting documents
                            </small>
                            <div class="file-attachment-field">
                                <div class="file-attachment-list" id="verification_attachment_uar"></div>
                                <div class="add-btn">
                                    <div>Add</div>
                                    <input type="file" id="myfile" name="verification_attachment_uar[]"
                                        oninput="addMultipleFiles(this, 'verification_attachment_uar')" multiple>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="button-block">
                        <button type="submit" id="ChangesaveButton" class="saveButton on-submit-disable-button">Save</button>
                        <button type="button" class="backButton" onclick="previousStep()">Back</button>
                        <button type="button" id="ChangeNextButton" class="nextButton"
                            onclick="nextStep()">Next</button>
                        <button type="button"> <a href="{{ url('rcms/qms-dashboard') }}" class="text-white">
                                Exit </a> </button>
                    </div>

                </div>
            </div>
        </div>
      
        <!-- Extention add -->

        <div id="CCForm20" class="inner-block cctabcontent">
            <div class="inner-block-content">
                <div class="row">
                    <div class="sub-head"> OOS Extension </div>
                    <div class="col-lg-6 new-date-data-field">
                        <div class="group-input input-date">
                            <label for="Audit Schedule End Date">Proposed Due Date (OOS)</label>
                            <div class="calenderauditee">
                                <input type="text" id="oos_proposed_due_date" placeholder="DD-MMM-YYYY" />
                                <input type="date" name="oos_proposed_due_date"
                                    min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" class="hide-input"
                                    oninput="handleDateInput(this, 'oos_proposed_due_date')"  />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="group-input">
                            <label for="oos_extension_justification">Extension Justification (OOS)</label>
                            <!-- <div><small class="text-primary">Please insert "NA" in the data field if it does
                                    not require completion</small></div> -->
                            <textarea class="tiny" name="oos_extension_justification" id="summernote-10">
                        </textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="group-input">
                            <label for=" oos_extension_completed_by"> OOS Extension Completed By
                            </label>
                            <select name="oos_extension_completed_by" id="oos_extension_completed_by" >
                                <option value="">-- Select --</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 new-date-data-field">
                        <div class="group-input input-date">
                            <label for="Audit Schedule End Date">OOS Extension Completed On</label>
                            <div class="calenderauditee">
                                <input type="text" id="oos_extension_completed_on" readonly placeholder="DD-MMM-YYYY" />
                                <input type="date" name="oos_extension_completed_on"
                                    min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" class="hide-input"
                                    oninput="handleDateInput(this, 'oos_extension_completed_on')" />
                            </div>
                        </div>
                    </div>
                    <div class="sub-head"> CAPA Extension </div>
                    <div class="col-lg-6 new-date-data-field">
                        <div class="group-input input-date">
                            <label for="capa_proposed_due_date">Proposed Due Date (CAPA)</label>
                            <div class="calenderauditee">
                                <input type="text" id="capa_proposed_due_date" readonly placeholder="DD-MMM-YYYY" />
                                <input type="date" name="capa_proposed_due_date"
                                    min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" class="hide-input"
                                    oninput="handleDateInput(this, 'capa_proposed_due_date')"  />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="group-input">
                            <label for="capa_extension_justification">Extension Justification (CAPA)</label>
                            <!-- <div><small class="text-primary">Please insert "NA" in the data field if it does
                                    not require completion</small></div> -->
                            <textarea class="tiny" name="capa_extension_justification" id="summernote-10">
                        </textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="group-input">
                                <label for=" capa_extension_completed_by"> CAPA Extension Completed By
                                </label>
                                <select name="capa_extension_completed_by" id="capa_extension_completed_by" >
                                    <option value="">-- Select --</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 new-date-data-field">
                            <div class="group-input input-date">
                                <label for="Audit Schedule End Date">CAPA Extension Completed On</label>
                                <div class="calenderauditee">
                                    <input type="text" id="capa_extension_completed_on" readonly placeholder="DD-MMM-YYYY"  />
                                    <input type="date" name="capa_extension_completed_on" max="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"
                                        oninput="handleDateInput(this, 'capa_extension_completed_on')"   class="hide-input"/>
                                </div>
                            </div>
                        </div>
                        {{-- row_end --}}
                    </div>
                    <div class="sub-head"> Quality Risk Management Extension </div>
                    <div class="col-lg-6 new-date-data-field">
                        <div class="group-input input-date">
                            <label for="qrm_proposed_due_date">Proposed Due Date (Quality Risk Management)</label>
                            <div class="calenderauditee">
                                <input type="text" id="qrm_proposed_due_date" readonly placeholder="DD-MMM-YYYY" />
                                <input type="date" name="qrm_proposed_due_date"
                                    min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" class="hide-input"
                                    oninput="handleDateInput(this, 'qrm_proposed_due_date')"  />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="group-input">
                            <label for="qrm_extension_justification">Extension Justification (Quality Risk Management)</label>
                            <div><small class="text-primary">Please insert "NA" in the data field if it does not require completion</small></div>
                            <textarea class="tiny" name="qrm_extension_justification" id="summernote-10"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="group-input">
                                <label for=" Quality_Risk_Management_Extension_Completed_By"> Quality Risk Management Extension Completed By </label>
                                <select name="qrm_extension_completed_by" id="qrm_extension_completed_by">
                                    <option value="">-- Select --</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 new-date-data-field">
                            <div class="group-input input-date">
                                <label for="qrm_extension_completed_on">Quality Risk Management Extension Completed On</label>
                                <div class="calenderauditee">
                                    <input type="text" id="qrm_extension_completed_on" readonly placeholder="DD-MMM-YYYY"  />
                                    <input type="date"name="qrm_extension_completed_on"
                                        min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" class="hide-input"
                                        oninput="handleDateInput(this, 'qrm_extension_completed_on')"  />
                                </div>
                            </div>
                        </div>
                        {{-- row_end --}}
                    </div>
                    <div class="sub-head">Investigation Extension </div>
                    <div class="col-lg-6 new-date-data-field">
                        <div class="group-input input-date">
                            <label for="investigation_proposed_due_date">Proposed Due Date (Investigation)</label>
                            <div class="calenderauditee">
                                <input type="text" id="investigation_proposed_due_date" readonly placeholder="DD-MMM-YYYY"  />
                                <input type="date" name="investigation_proposed_due_date" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"
                                 class="hide-input" oninput="handleDateInput(this, 'investigation_proposed_due_date')"  />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="group-input">
                            <label for="investigation_extension_justification">Extension Justification (Investigation)</label>
                            <div><small class="text-primary">Please insert "NA" in the data field if it does
                                    not require completion</small></div>
                            <textarea class="tiny" name="investigation_extension_justification" id="summernote-10">
                        </textarea>
                        </div>
                    </div>
                    {{-- row --}}
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="group-input">
                                <label for=" investigation_extension_completed_by"> Investigation Extension Completed By </label>
                                <select name="investigation_extension_completed_by"id="investigation_extension_completed_by" >
                                    <option value="">-- Select --</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 new-date-data-field">
                            <div class="group-input input-date">
                                <label for="investigation_extension_completed_on">Investigation Extension Completed On</label>
                                <div class="calenderauditee">
                                    <input type="text" id="investigation_extension_completed_on" readonly placeholder="DD-MMM-YYYY"  />
                                    <input type="date" name="investigation_extension_completed_on" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"
                                        class="hide-input" oninput="handleDateInput(this, 'investigation_extension_completed_on')"  />
                                </div>
                            </div>
                        </div>
                        {{-- row-end --}}
                    </div>
                       
                </div>
                <div class="button-block">
                    <button type="submit" style=" justify-content: center; width: 4rem; margin-left: 1px;" class="saveButton on-submit-disable-button">Save</button>
                    <a href="/rcms/qms-dashboard" style=" justify-content: center; width: 4rem; margin-left: 1px;">
                        <button type="button"  class="backButton">Back</button>
                    </a>
                    <button type="button" style=" justify-content: center; width: 4rem; margin-left: 1px;" class="nextButton" onclick="nextStep()">Next</button>
                    <button type="button" style=" justify-content: center; width: 4rem; margin-left: 1px;"> <a href="{{ url('rcms/qms-dashboard') }}"
                            class="text-white">
                            Exit </a> </button>
                        <!-- <a style="  justify-content: center; width: 10rem; margin-left: 1px;" type="button"
                            class="button  launch_extension" data-bs-toggle="modal"
                            data-bs-target="#launch_extension">
                            Launch Extension
                        </a>  -->
                </div>
                </div>
            </div>
        </div>

       
        <!----- Signature ----->
        <div id="CCForm17" class="inner-block cctabcontent">
            <div class="inner-block-content">
                <div class="sub-head">
                    Activity Log
                </div>
                <div class="row">
                    <div class="col-12 sub-head">  Initiator </div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="Audit Agenda">Submited by</label>
                            <div class="static"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="Audit Agenda">Submited on</label>
                            <div class="Date"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                       <div class="group-input">
                        <label for="Submitted on">Comment</label>
                        <div class="Date"></div>
                       </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="cancelled by">Cancelled By :</label>
                            <div class="static"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="cancelled on">Cancelled On :</label>
                            <div class="Date"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                       <div class="group-input">
                        <label for="Submitted on">Comment</label>
                        <div class="Date"></div>
                       </div>
                    </div>
                <div>
                <div class="row">
                    <div class="col-12 sub-head">HOD/Designee</div>
                 <!-- Request More Info -->
                    <!--  Initial Phase I Investigation  Done By -->
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="Audit Team">HOD Primary Review Complete By</label>
                            <div class="static"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="Audit Team">HOD Primary Review Complete On</label>
                            <div class="Date"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                       <div class="group-input">
                        <label for="Submitted on">HOD Primary Review Complete Comment</label>
                        <div class="Date"></div>
                       </div>
                    </div>
                <div>
                <div class="row">
                    <div class="col-12 sub-head">QC Head/Designee </div>
                    <!-- Request More Info -->
                    <!-- Assignable Cause Found -->
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="Audit Comments">CQA/QA Head Primary Review Complete By</label>
                            <div class="static"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="Audit Attachments">CQA/QA Head Primary Review Complete On</label>
                            <div class="Date"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                       <div class="group-input">
                        <label for="Submitted on">CQA/QA Head Primary Review Complete Comment</label>
                        <div class="Date"></div>
                       </div>
                    </div>
                    <!-- Request More Info -->
                    <!-- Assignable Cause Not Found -->
                    <div class="col-12 sub-head">Initiator</div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="Audit Attachments">Phase IA Investigation By</label>
                            <div class="static"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="Audit Attachments">Phase IA Investigation On</label>
                            <div class="Date"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                       <div class="group-input">
                        <label for="Submitted on">Phase IA Investigation Comment</label>
                        <div class="Date"></div>
                       </div>
                    </div>
                <div>
                <div class="row">
                    <div class="col-12 sub-head">HOD/Designee</div>
                     <!-- Request More Info -->
                    <!-- Correction Completed -->
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="Audit Attachments">Phase IA HOD Review Complete By</label>
                            <div class="static"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="Audit Attachments">Phase IA HOD Review Complete On</label>
                            <div class="Date"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                       <div class="group-input">
                        <label for="Submitted on">Phase IA HOD Review Complete Comment</label>
                        <div class="Date"></div>
                       </div>
                    </div>
                    <!-- Request More Info -->
                    <!-- Proposed Hypothesis Experiment -->
                    <div class="col-12 sub-head">QA/CQA</div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="Audit Response Completed By"> Phase IA QA/CQA Review Complete By</label>
                            <div class=" static"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="Audit Response Completed On">Phase IA QA/CQA Review Complete On</label>
                            <div class="date"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                       <div class="group-input">
                        <label for="Submitted on">Phase IA QA/CQA Review Complete Comment</label>
                        <div class="Date"></div>
                       </div>
                    </div>
                    <!-- Obvious Error Found -->
                    <div class="col-12 sub-head">CQA/QA Head/Designee</div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="Audit Attachments">Assignable Cause Not Found By</label>
                            <div class=" static"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="Audit Attachments">Assignable Cause Not Found On</label>
                            <div class="date"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                       <div class="group-input">
                        <label for="Submitted on">Assignable Cause Not Found Comment</label>
                        <div class="Date"></div>
                       </div>
                    </div>
                    <!-- No Assignable Cause Found -->
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="Audit Attachments">Assignable Cause Found By</label>
                            <div class=" static"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="Audit Attachments">Assignable Cause Found On</label>
                            <div class="date"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                       <div class="group-input">
                        <label for="Submitted on">Assignable Cause Found Comment</label>
                        <div class="Date"></div>
                       </div>
                    </div>
                <div>
                <div class="row">
                    <div class="col-12 sub-head"> Initiator </div>
                    <!-- Request More Info -->
                    <!-- Repeat Analysis Completed -->
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="Audit Attachments">Phase IB Investigation By</label>
                            <div class=" static"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="Audit Attachments">Phase IB Investigation On</label>
                            <div class="date"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                       <div class="group-input">
                        <label for="Submitted on">Phase IB Investigation Comment</label>
                        <div class="Date"></div>
                       </div>
                    </div>
                    <!-- Request More Info -->
                    <!-- Full Scale Investigation -->
                    <div class="col-12 sub-head">HOD/Designee</div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="Audit Attachments">Phase IB HOD Review Complete by</label>
                            <div class=" static"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="Audit Attachments">Phase IB HOD Review Complete On</label>
                            <div class="date"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                       <div class="group-input">
                        <label for="Submitted on">Phase IB HOD Review Complete Comment</label>
                        <div class="Date"></div>
                       </div>
                    </div>
                <div>
                <div class="row">
                    <div class="col-12 sub-head"> QA/CQA</div>
                    <!-- Request More Info -->
                    <!-- Assignable Cause Found (Manufacturing Defect) -->
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="Reference Recores">Phase IB QA/CQA Review Complete By</label>
                            <div class=" static"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="Reference Recores">Phase IB QA/CQA Review Complete On </label>
                            <div class="date"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                       <div class="group-input">
                        <label for="Submitted on">Phase IB QA/CQA Review Complete Comment</label>
                        <div class="Date"></div>
                       </div>
                    </div>
                    <!-- No Assignable Cause Found (No Manufacturing Defect) -->
                    <div class="col-12 sub-head">CQA/QA Head/Designee</div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="Reference Recores">P-I B Assignable Cause Not Found By</label>
                            <div class=" static"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="Reference Recores">P-I B Assignable Cause Not Found On </label>
                            <div class="date"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                       <div class="group-input">
                        <label for="Submitted on">P-I B Assignable Cause Not Found Comment</label>
                        <div class="Date"></div>
                       </div>
                    </div>
                     <!-- Request More Info -->
                     <!-- Phase II Correction Completed  -->
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="Reference Recores">P-I B Assignable Cause Found By</label>
                            <div class="static"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="Reference Recores">P-I B Assignable Cause Found On</label>
                            <div class="date"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                       <div class="group-input">
                        <label for="Submitted on">P-I B Assignable Cause Found Comment</label>
                        <div class="Date"></div>
                       </div>
                    </div>
                
                     <!--  Phase II A Correction Inconclusive -->
                     <div class="col-12 sub-head">Production</div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="Reference Recores">Phase II A Investigation By</label>
                            <div class=" static"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="Reference Recores">Phase II A Investigation On</label>
                            <div class="date"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                       <div class="group-input">
                        <label for="Submitted on">Phase II A Investigation Comment</label>
                        <div class="Date"></div>
                       </div>
                    </div>
               
                    <!-- Request More Info -->
                     <!-- Retesting/resampling -->
                     <div class="col-12 sub-head">Production Head</div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="Reference Recores">Phase II A HOD Review Complete By </label>
                            <div class=" static"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="Reference Recores">Phase II A HOD Review Complete On </label>
                            <div class="date"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                       <div class="group-input">
                        <label for="Submitted on">Phase II A HOD Review Complete Comment</label>
                        <div class="Date"></div>
                       </div>
                    </div>
                
                    <!-- Phase II B Correction Inconclusive -->
                    <div class="col-12 sub-head">QA/CQA</div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="Reference Recores">Phase II A QA/CQA Review Complete By </label>
                            <div class=" static"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="Reference Recores">Phase II A QA/CQA Review Complete On </label>
                            <div class="date"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                       <div class="group-input">
                        <label for="Submitted on">Phase II A QA/CQA Review Complete Comment</label>
                        <div class="Date"></div>
                       </div>
                    </div>
                <div>
                <div class="row">
                   <div class="col-12 sub-head"> CQA/QA Head/Designee</div>
                    <!-- Final Approval -->
                    <!-- Request More Info -->
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="submitted by">P-II A Assignable Cause Not Found By</label>
                            <div class="static"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="submitted on">P-II A Assignable Cause Not Found On</label>
                            <div class="Date"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                       <div class="group-input">
                        <label for="Submitted on">P-II A Assignable Cause Not Found Comment</label>
                        <div class="Date"></div>
                       </div>
                    </div>
                    <!-- Request More Info -->
                    <!-- Approval Completed -->
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="completed by"> P-II A Assignable Cause Found By</label>
                            <div class="static"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="completed on"> P-II A Assignable Cause Found On</label>
                            <div class="Date"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                       <div class="group-input">
                        <label for="Submitted on">P-II A Assignable Cause Found Comment</label>
                        <div class="Date"></div>
                       </div>
                    </div>
                    <div class="col-12 sub-head">Initiator</div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="completed by"> Phase II B Investigation By</label>
                            <div class="static"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="completed on"> Phase II B Investigation On</label>
                            <div class="Date"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                       <div class="group-input">
                        <label for="Submitted on">Phase II B Investigation Comment</label>
                        <div class="Date"></div>
                       </div>
                    </div>
                    <div class="col-12 sub-head">HOD/Designee</div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="completed by"> Phase II B HOD Review Complete By</label>
                            <div class="static"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="completed on"> Phase II B HOD Review Complete On</label>
                            <div class="Date"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                       <div class="group-input">
                        <label for="Submitted on">Phase II B HOD Review Complete Comment</label>
                        <div class="Date"></div>
                       </div>
                    </div>
                    <div class="col-12 sub-head">QA/CQA</div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="completed by">Phase II B QA/CQA Review Complete By</label>
                            <div class="static"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="completed on"> Phase II B QA/CQA Review Complete On</label>
                            <div class="Date"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                       <div class="group-input">
                        <label for="Submitted on">Phase II B QA/CQA Review Complete Comment</label>
                        <div class="Date"></div>
                       </div>
                    </div>
                    <div class="col-12 sub-head">CQA/QA Head /Designee</div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="completed by">P-II B Assignable Cause Not Found By</label>
                            <div class="static"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="completed on">P-II B Assignable Cause Not Found On</label>
                            <div class="Date"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                       <div class="group-input">
                        <label for="Submitted on">P-II B Assignable Cause Not Found Comment</label>
                        <div class="Date"></div>
                       </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="completed by">P-II B Assignable Cause Found By</label>
                            <div class="static"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="group-input">
                            <label for="completed on">P-II B Assignable Cause Found On</label>
                            <div class="Date"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                       <div class="group-input">
                        <label for="Submitted on">P-II B Assignable Cause Found Comment</label>
                        <div class="Date"></div>
                       </div>
                    </div>
                </div>

                <div class="button-block">
                    <button type="submit" id="ChangesaveButton" class="saveButton on-submit-disable-button">Save</button>
                    <!-- <button type="button" class="backButton" onclick="previousStep()">Back</button> -->
                    <button type="button"> <a href="{{ url('rcms/qms-dashboard') }}" class="text-white">
                            Exit </a> </button>
                </div>
            </div>
        </div>

    </div>
    </form>

    </div>
    </div>
    <script>
        $(document).ready(function() {
            
            $('#Mainform').on('submit', function(e) {
                $('.on-submit-disable-button').prop('disabled', true);
            });
        })
    </script>
    <script>
        document.getElementById('initiator_group').addEventListener('change', function() {
            var selectedValue = this.value;
            document.getElementById('initiator_group_code').value = selectedValue;
        });
        
        function setCurrentDate(item){
            if(item == 'yes'){
                $('#effect_check_date').val('{{ date('d-M-Y')}}');
            }
            else{
                $('#effect_check_date').val('');
            }
        }
        document.getElementById("dynamicSelectType").addEventListener("change", function() {
            var selectedRoute = this.value;
            window.location.href = selectedRoute; // Redirect to the selected route
        });
    </script>


    <script>
        VirtualSelect.init({
            ele: '#reference_record, #notify_to'
        });

        $('#summernote').summernote({
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear', 'italic']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });

        $('.summernote').summernote({
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear', 'italic']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });

        let referenceCount = 1;

        function addReference() {
            referenceCount++;
            let newReference = document.createElement('div');
            newReference.classList.add('row', 'reference-data-' + referenceCount);
            newReference.innerHTML = `
            <div class="col-lg-6">
                <input type="text" name="reference-text">
            </div>
            <div class="col-lg-6">
                <input type="file" name="references" class="myclassname">
            </div><div class="col-lg-6">
                <input type="file" name="references" class="myclassname">
            </div>
        `;
            let referenceContainer = document.querySelector('.reference-data');
            referenceContainer.parentNode.insertBefore(newReference, referenceContainer.nextSibling);
        }
    </script>

    <script>
        VirtualSelect.init({
            ele: '#facility_name, #group_name, #auditee, #audit_team'
        });

        function openCity(evt, cityName) {
            var i, cctabcontent, cctablinks;
            cctabcontent = document.getElementsByClassName("cctabcontent");
            for (i = 0; i < cctabcontent.length; i++) {
                cctabcontent[i].style.display = "none";
            }
            cctablinks = document.getElementsByClassName("cctablinks");
            for (i = 0; i < cctablinks.length; i++) {
                cctablinks[i].className = cctablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
     <!-- --------------------------------------button--------------------- -->
     <script>
        VirtualSelect.init({
            ele: '#related_records, #hod'
        });

        function openCity(evt, cityName) {
            var i, cctabcontent, cctablinks;
            cctabcontent = document.getElementsByClassName("cctabcontent");
            for (i = 0; i < cctabcontent.length; i++) {
                cctabcontent[i].style.display = "none";
            }
            cctablinks = document.getElementsByClassName("cctablinks");
            for (i = 0; i < cctablinks.length; i++) {
                cctablinks[i].className = cctablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";

            // Find the index of the clicked tab button
            const index = Array.from(cctablinks).findIndex(button => button === evt.currentTarget);

            // Update the currentStep to the index of the clicked tab
            currentStep = index;
        }

        const saveButtons = document.querySelectorAll(".saveButton");
        const nextButtons = document.querySelectorAll(".nextButton");
        const form = document.getElementById("step-form");
        const stepButtons = document.querySelectorAll(".cctablinks");
        const steps = document.querySelectorAll(".cctabcontent");
        let currentStep = 0;

        function nextStep() {
            // Check if there is a next step
            if (currentStep < steps.length - 1) {
                // Hide current step
                steps[currentStep].style.display = "none";

                // Show next step
                steps[currentStep + 1].style.display = "block";

                // Add active class to next button
                stepButtons[currentStep + 1].classList.add("active");

                // Remove active class from current button
                stepButtons[currentStep].classList.remove("active");

                // Update current step
                currentStep++;
            }
        }

        function previousStep() {
            // Check if there is a previous step
            if (currentStep > 0) {
                // Hide current step
                steps[currentStep].style.display = "none";

                // Show previous step
                steps[currentStep - 1].style.display = "block";

                // Add active class to previous button
                stepButtons[currentStep - 1].classList.add("active");

                // Remove active class from current button
                stepButtons[currentStep].classList.remove("active");

                // Update current step
                currentStep--;
            }
        }
    </script>

    <script>
        var maxLength = 255;
        $('#docname').keyup(function() {
            var textlen = maxLength - $(this).val().length;
            $('#rchars').text(textlen);
        });
    </script>
    <script>
        $(document).on('click', '.removeRowBtn', function() {
            $(this).closest('tr').remove();
        })
    </script>
@endsection

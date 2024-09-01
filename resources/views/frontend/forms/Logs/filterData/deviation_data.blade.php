@forelse ($deviation as $deviations)
    <tr>
        <td>{{$loop->index+1}}</td>
<td>{{$deviations->intiation_date}}</td>
<td>{{ $deviations->division ? $deviations->division->name:'-'}}/CC/{{ date('Y') }}/{{ str_pad($deviations->record, 4, '0', STR_PAD_LEFT) }}</td>
<td>{{$deviations->short_description}}</td>
<td>{{ $deviations->division ? $deviations->division->name : '-' }}</td>
<td>{{$deviations->Initiator_Group}}</td>
<td>{{$deviations->Deviation_category?$deviations->Deviation_category:'NA'}}</td>
<td>{{$deviations->audit_type}}</td>
<td></td>
<td>{{$deviations->QA_final_approved_on ? QA_final_approved_on : 'NA'}}</td>
<td>{{$deviations->due_date}}</td>
<td>{{$deviations->QA_final_approved_by ? QA_final_approved_by : 'NA' }}</td>
<td>{{$deviations->status}}</td>
</tr>
@empty 

<tr>
<td colspan="12" class="text-center">
<div class="alert alert-warning my-2" style="--bs-alert-bg:#999793;     --bs-alert-color:#060606 ">
    Data Not Found
</div>
</td>
</tr>  

@endforelse


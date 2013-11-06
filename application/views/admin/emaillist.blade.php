@foreach ($emailList as $email)
<span style="width:100%;float:left;background-color:#fff; border:1px solid #ccc; padding:5px;" onclick="fill_fields('{{$email->jobid}}','{{$key_value}}','{{$hospital_id}}')">{{$email->contact_email}}</span>
@endforeach 
           
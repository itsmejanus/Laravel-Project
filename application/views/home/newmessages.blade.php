<table>
@foreach($messages as $key=>$msg)
<tbody>
<tr>
<td><img src="img/recruiter/message_profile_thumb.gif" alt="Profile image"></td>
<td class="span4" style="vertical-align:top;">
<div class="messageb">Message From {{$msg->from}}</div>
<div class="message">{{$msg->message}}</div>
</td>
<td class="span4" style="vertical-align:top;">
<div class="messageb">{{$msg->subject}}</div>
</td>
</tr>
</tbody>
@endforeach
</table>
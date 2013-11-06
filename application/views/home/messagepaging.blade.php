<table class="table table-bordered table-striped" style="margin-top:0px;">
                <thead>
                <tr>
                <td>
                <span style="float:left;margin-left:10px;">
                <input type="hidden" name="check_type" id="check_type" value="false" />
                <input type="checkbox" name="check_all" id="check_all" onclick="check_them('{{$limit}}')"/>
                </span>
                <span style="float:left;margin-left:5px;"><img src="img/recruiter/red_message_icon.gif"/></span>
                <span class="bold" style="float:left;margin-left:5px;margin-top:5px;">Messages</span>
                <span style="float:left;margin-left:10px;margin-top:5px;cursor:pointer;" onclick="action_checkbox('read','{{$limit}}')">Mark as Read</span>
                <span style="float:left;margin-left:10px;margin-top:5px;">|</span>
                <span style="float:left;margin-left:10px;margin-top:5px;cursor:pointer;" onclick="action_checkbox('unread','{{$limit}}')">Mark as Unread</span>
                <span style="float:left;margin-left:10px;margin-top:5px;">|</span>
                <span style="float:left;margin-left:10px;margin-top:5px;cursor:pointer;" onclick="action_checkbox('delete','{{$limit}}')">Delete</span>
                <span style="float:right;margin-right:10px;margin-top:5px;">
                @if($start==1)
                <img src="img/recruiter/left_arrow.png" onclick="alert('Already on first page');"/>
                @endif
                @if($start > 1)
                <img src="img/recruiter/left_arrow.png" onclick="show_paging({{$start}},{{$limit}},'previous')"/>
                @endif
                &nbsp;
                @if($limit < $total_count)
                <img src="img/recruiter/right_arrow.png" onclick="show_paging({{$start}},{{$limit}},'next')"/>
                @endif
                @if($limit >= $total_count)
                <img src="img/recruiter/right_arrow.png" onclick="alert('No more records to show');"/>
                @endif
                </span>
                <span style="float:right;margin-right:10px;margin-top:5px;">{{$start}}-{{$limit}} of {{$total_count}}</span>
                
                </td>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td>
                <table style="width:100%;">
@foreach($messages as $key=>$msg)
@if($key%2!=0)
<tbody style="background-color:#B8B8B8;">
<tr>
<td width="5%"><input type="checkbox" name="chk_box{{$key}}" id="chk_box{{$key}}" value="{{$msg->id}}" /></td>
<td width="10%"><img src="img/recruiter/message_profile_thumb.gif" alt="Profile image"></td>
<td class="span4" style="vertical-align:top;width:42%;">
<div class="messageb">Message From {{$msg->from}}</div>
<div class="message">{{$msg->message}}</div>
<div style="width:100%;float:left;display:none;" id="reply_div_{{$msg->id}}">
<table style="width:230px;">
<tr>
<td style="width:30px;"><img src="img/recruiter/message_profile_thumb.gif" width="28" height="28"></td>
<td style="width:200px;"><textarea cols="50" rows="10" name="reply_{{$msg->id}}" id="reply_{{$msg->id}}" style="width:300px;"></textarea></td>
</tr>
<tr>
<td colspan="2" align="left">
<div style="height:25px;background-color:#BAD9ED;border:1px solid #6A7881;width:50px;text-align:center;float:right;" onclick="send_reply('{{$msg->from_id}}','{{$msg->id}}')">Send</div>
</td>
</tr>
</table>
</div>
</td>
<td class="span4" style="vertical-align:top;width:43%;">
<div class="messageb" onclick="open_reply('{{$msg->id}}');">{{$msg->subject}}</div>
</td>
</tr>
</tbody>
@endif
@if($key%2==0)
<tbody style="background-color:#F6F6F6;">
<tr>
<td width="5%"><input type="checkbox" name="chk_box{{$key}}" id="chk_box{{$key}}" value="{{$msg->id}}" /></td>
<td width="10%"><img src="img/recruiter/message_profile_thumb.gif" alt="Profile image"></td>
<td class="span4" style="vertical-align:top;width:42%;">
<div class="messageb">Message From {{$msg->from}}</div>
<div class="message">{{$msg->message}}</div>
<div style="width:100%;float:left;display:none;" id="reply_div_{{$msg->id}}">
<table style="width:230px;">
<tr>
<td style="width:30px;"><img src="img/recruiter/message_profile_thumb.gif" width="28" height="28"></td>
<td style="width:200px;"><textarea cols="50" rows="10" name="reply_{{$msg->id}}" id="reply_{{$msg->id}}" style="width:300px;"></textarea></td>
</tr>
<tr>
<td colspan="2" align="left">
<div style="height:25px;background-color:#BAD9ED;border:1px solid #6A7881;width:50px;text-align:center;float:right;" onclick="send_reply('{{$msg->from_id}}','{{$msg->id}}')">Send</div>
</td>
</tr>
</table>
</div>
</td>
<td class="span4" style="vertical-align:top;width:43%;">
<div class="messageb" onclick="open_reply('{{$msg->id}}');">{{$msg->subject}}</div>
</td>
</tr>
</tbody>
@endif
@endforeach
</table>
                </td>
                  </tr>
                  </tbody>
              </table>
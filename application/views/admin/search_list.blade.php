 @if($Record>0)
  <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border:1px solid #ccc; ">
  <tr>
    <td width="12%" class="TableCalss2">Hospital Name</td>
    <td width="12%" class="TableCalss2">Title of Position</td>
    <td width="12%" class="TableCalss2">Date Posted</td>
    <td width="12%" class="TableCalss2">Contact Name</td>
    <td width="12%" class="TableCalss2">Contact Email</td>
    <td width="12%" class="TableCalss2">Contact Phone</td>
    <td width="12%" class="TableCalss2">Contact Company</td>
    <td width="12%" class="TableCalss2">Contact Association</td>
  </tr>
   @foreach ($userUpdate as $key=>$hospital)
  @if($fno!="")
  <tr id="row_{{$key}}">
    <td class="TableCalss4"><a href="javascript:void(0)">{{ $hospital-> name}}</a></td>
    <td class="TableCalss3"><a href="javascript:void(0)" style="color:#666;">click to add</a></td>
   <td class="TableCalss3"><a href="javascript:void(0)" style="color:#666;">click to add</a></td>
   <td class="TableCalss3"><a href="javascript:void(0)" style="color:#666;" onclick="open_popup()">click to add</a></td>
   <td class="TableCalss3"><a href="javascript:void(0)" style="color:#666;" onclick="open_popup()">click to add</a></td>
   <td class="TableCalss3"><a href="javascript:void(0)" style="color:#666;" onclick="open_popup()">click to add</a></td>
   <td class="TableCalss3"><a href="javascript:void(0)" style="color:#666;" onclick="open_popup()">click to add</a></td>
   <td class="TableCalss3"><a href="javascript:void(0)" style="color:#666;" onclick="open_popup()">click to add</a></td>
    
  </tr>
  @endif
  @if($fno=="")
  <tr id="row_{{$key}}">
    <td class="TableCalss4"><a href="javascript:void(0)" onclick="show_editables('{{ $hospital-> jobid}}')">{{ $hospital-> name}}</a></td>
    <td class="TableCalss3">{{ $hospital-> position}} </td>
   <td class="TableCalss3">{{ $hospital-> date_posted}} </td>
   <td class="TableCalss3">{{ $hospital-> contact_name}} </td>
   <td class="TableCalss3">{{ $hospital-> contact_email}} </td>
   <td class="TableCalss3">{{ $hospital-> contact_phone}} </td>
   <td class="TableCalss3">Teamhealth</td>
   <td class="TableCalss3">Potential</td>
    
  </tr>
  @endif
  @endforeach
  </table>
  @endif
  @if($Record==0)
  <div  style="width:100%;height:500px; text-align:center;">No Hospital Found</div>
  @endif
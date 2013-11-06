<div style="float:left; width:auto; font-weight:bold; margin:6px 0px 0px 5px; clear:both;">Recruited Physcian</div>
	 
	 <div class="innerTable">
	  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="24%"  class="TableStyle"><strong>Physician Name</strong></td>
    <td width="22%"  class="TableStyle"><strong>Date of Recruitment</strong></td>
    <td width="17%"  class="TableStyle"><strong>Recruiter Confirmation</strong></td>
    <td width="18%"  class="TableStyle"><strong>Payment Received</strong></td>
    <td width="19%"  class="TableStyle1"><strong>Payment Sent</strong></td>
  </tr>
  @foreach ($recruitedPhysician as $key=>$physician)
     <tr>
       <td class="TableStyle">{{$physician->physicianname}}</td>
       <td class="TableStyle">{{$physician->dateofrecruitment}}</td>
       <td class="TableStyle">
       @if($physician->recruiterconfirmation==0)
       <input type="checkbox" name="recruiter_confirm{{$key}}" id="recruiter_confirm{{$key}}" onchange="update_relationship('{{$physician->id}}',this.checked,'recruiterConfirmation','recruited_physicians')"/>
       @endif
       @if($physician->recruiterconfirmation==1)
       <input type="checkbox" name="recruiter_confirm{{$key}}" id="recruiter_confirm{{$key}}" onchange="update_relationship('{{$physician->id}}',this.checked,'recruiterConfirmation','recruited_physicians')" checked/>
       @endif
       </td>
       <td class="TableStyle">
       @if($physician->paymentreceived==0)
       <input type="checkbox" name="payment_received{{$key}}" id="payment_received{{$key}}"  onchange="update_relationship('{{$physician->id}}',this.checked,'paymentReceived','recruited_physicians')"/>
       @endif
       @if($physician->paymentreceived==1)
       <input type="checkbox" name="payment_received{{$key}}" id="payment_received{{$key}}" onchange="update_relationship('{{$physician->id}}',this.checked,'paymentReceived','recruited_physicians')" checked/>
       @endif
       </td>
       <td class="TableStyle">
       @if($physician->paymentsent==0)
       <input type="checkbox" name="payment_sent{{$key}}" id="payment_sent{{$key}}" onchange="update_relationship('{{$physician->id}}',this.checked,'paymentSent','recruited_physicians')"/>
       @endif
       @if($physician->paymentsent==1)
       <input type="checkbox" name="payment_sent{{$key}}" id="payment_sent{{$key}}" onchange="update_relationship('{{$physician->id}}',this.checked,'paymentSent','recruited_physicians')" checked/>
       @endif
       </td>
     </tr>
 @endforeach
</table>

	 </div>
	 
	  <div style="float:left; width:auto; font-weight:bold; margin:6px 0px 0px 5px; clear:both;">Company History</div>
	 
	 <div class="innerTable">
	  <table width="100%" border="0" cellspacing="0" cellpadding="0">
       <tr>
        <td width="29%" class="TableStyle"><strong>Company name</strong></td>
        <td width="25%" class="TableStyle"><strong>Breakage Date</strong></td>
        <td width="46%" class="TableStyle1"><strong>Change Status</strong></td>
      </tr>
      @foreach ($companyHistory as $key=>$company)
       <tr>
         <td class="TableStyle">{{$company->companyname}}</td>
         <td class="TableStyle">{{$company->dateofbreakage}}</td>
         <td class="TableStyle1" style="font-size:10px;"><table width="153" border="0" cellspacing="0" cellpadding="0">
           <tr>
             <td width="59">Suspend 
               @if($company->status==1)
               <input name="status{{$key}}" id="suspend{{$key}}" type="radio" value="1" onclick="update_relationship('{{$company->id}}',this.value,'status','company_history')" checked/>
               @endif
               @if($company->status==2)
               <input name="status{{$key}}" id="suspend{{$key}}" type="radio" value="1" onclick="update_relationship('{{$company->id}}',this.value,'status','company_history')"/>
             	@endif 
             </td>
             <td width="94">Break Connection
             @if($company->status==1) 
               <input name="status{{$key}}" id="break{{$key}}" type="radio" value="2" onclick="update_relationship('{{$company->id}}',this.value,'status','company_history')"/>
             @endif
             @if($company->status==2) 
               <input name="status{{$key}}" id="break{{$key}}" type="radio" value="2" onclick="update_relationship('{{$company->id}}',this.value,'status','company_history')" checked/>
             @endif
             </td>
           </tr>
         </table></td>
       </tr>
      @endforeach 
     </table>


	 </div>
	 
	 <div style="float:left; width:auto; font-weight:bold; margin:6px 0px 0px 5px; clear:both;">Comment</div>
	 
	 <div class="innerTable">
	   <table width="100%" border="0" cellspacing="0" cellpadding="0">
         <tr>
           <td class="TableStyle1" style="padding-left:0px;">
   <textarea rows="1" name="comment" id="comment" style="width:368px; margin-bottom:0; border-radius:0px;" placeholder="Enter Comment here" onKeyPress="save_comment('{{$hospital_id}}',event)"></textarea>
           </td>
         </tr>
         <tr>
           <td>
           <div style="float:left;width:100%;height:100px;overflow-y:auto;" id="comment_div">
           <table width="100%" border="0" cellspacing="0" cellpadding="0">
            @foreach ($commmentList as $comment)
             <tr>
               <td width="343"  class="TableStyle">{{$comment->comment}}</td>
             </tr>
            @endforeach 
           </table>
           </div>
          </td>
         </tr>
       </table>
	 </div>
	 <div style="float:left; width:auto; font-weight:bold; margin:6px 0px 0px 5px; clear:both;"></div>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
            @foreach ($commmentList as $comment)
             <tr>
               <td width="343"  class="TableStyle">{{$comment->comment}}</td>
             </tr>
            @endforeach 
           </table>
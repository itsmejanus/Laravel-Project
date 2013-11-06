<table>
                <tbody width="100%">
                <tr>
                <td class="span100 bold">Date Posted</td>
                <td class="span150 bold">Job Title</td>
                <td class="span120 bold">Hospital</td>
                <td class="span120 bold">Recruiter</td>
                <td class="span120 bold">Location</td>
                <td class="span100 bold">Status</td>
                <td class="span100 bold">&nbsp;</td>
  				 </tr>
                 </tbody>
                 @foreach ($connectedHosps as $key=>$hospitals)
                 <tbody>
                <tr>
                <td>{{$hospitals->date_posted}}</td>
                <td>{{$hospitals->job_title}}</td>
                <td class="redunderline" onclick="hospital_profile('{{$hospitals->id}}')">{{$hospitals->hname}}</td>
                <td>{{$hospitals->contact_name}}</td>
                <td>{{$hospitals->location}}</td>
                <td>{{$hospitals->alias}}</td>
                <td><img src="img/physician/attachicon.gif" alt="Unconnect icon" title="Unconnect icon" onclick="connect_hospital('{{$hospitals->id}}','physician','unconnect')">&nbsp;&nbsp;<img src="img/physician/email.png" alt="email icon">&nbsp;&nbsp;<img src="img/physician/trash.png" alt="trash icon" title="trash icon" onclick="remove_hospital('{{$hospitals->id}}')"></td>
  				 </tr>
                 </tbody>
                 @endforeach
   				 </table>
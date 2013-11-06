<table>
                <tbody width="100%">
                <tr>
                <td class="span100 bold">Date Posted</td>
                <td class="span150 bold">Job Title</td>
                <td class="span120 bold">Hospital</td>
                <td class="span120 bold">Location</td>
                <td class="span120 bold">Status</td>
                <td class="span50 bold">&nbsp;</td>
                <td class="span30 bold">&nbsp;</td>
                <td class="span30 bold">&nbsp;</td>
                <td class="span30 bold">&nbsp;</td>
                <td class="span30 bold">&nbsp;</td>
  				 </tr>
                 </tbody>
                  @foreach ($likedHosps as $key=>$hospitals)
                 <tbody>
                <tr>
                <td>{{$hospitals->date_posted}}</td>
                <td>{{$hospitals->job_title}}</td>
                <td class="redunderline" onclick="hospital_profile('{{$hospitals->id}}')">{{$hospitals->hname}}</td>
                <td>{{$hospitals->location}}</td>
                <td>{{$hospitals->alias}}</td>
                <td>&nbsp;</td>
                <td><img src="img/physician/connect.png" alt="connect icon" title="connect icon" onclick="connect_hospital('{{$hospitals->id}}','physician','connect')"></td>
                <td><img src="img/physician/unlike.gif" alt="unlike button" title="unlike button" onclick="connect_hospital('{{$hospitals->id}}','hospital','unlike')"></td>
                <td><img src="img/physician/email.png" alt="email icon" title="email icon"></td>
                <td><img src="img/physician/trash.png" alt="trash icon" title="trash icon" onclick="remove_hospital('{{$hospitals->id}}')"></td>
  				 </tr>
                 </tbody>
                 @endforeach
   				 </table>
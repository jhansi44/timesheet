<html>
<head>
<Title> Users Registered</Title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>


   <table  class="table table-bordered user" >    

   <tr>
        <th>Date</th>
        <th>Project</th>
        <th>TicketNumber</th>
        <th>Ticketsubject</th>
        <th>Timein</th>
        <th>Timeout</th>
   </tr>
   @foreach ($users as $user) 
   <tr>
        <td>{{ $user->Date }}</td>
        <td>{{ $user->Project }}</td>
        <td>{{ $user->TicketNumber }}</td>
        <td>{{ $user->TicketSubject }}</td>
        <td>{{ $user->Timein }}</td>
        <td>{{ $user->Timeout }}</td>       
    </tr>
    @endforeach
</table>
<div class="text-center">
{{ $users->links() }}
</body>
</html>

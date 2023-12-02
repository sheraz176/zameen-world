<script>
    function callwithagent(random_id, title, phone_number,mobile_number,name, username) {
        // alert('hi');
        // alert(image);
        $('#random_id').text(random_id);
        $('#title').text(title);
        $('#phone_number').text(phone_number);
        $('#mobile_number').text(mobile_number);
        $('#name').text(name);
        $('#username').text(username);

    }
</script>
<script>
    function callhide() {
        //  alert('hi');
        // alert(image);
       
        $('#editnotes').modal('show');
       $('#addnotes').modal('hide');

    }
</script>

  <script>
    function emailwithagent(random_id, title, phone_number,mobile_number,name, username,agent_id,id) {
        // alert('hi');
        // alert(image);
        $('#emailrandom_id').text(random_id);
        $('#emailtitle').val(title);
        $('#emailphone_number').text(phone_number);
        $('#emailmobile_number').text(mobile_number);
        $('#emailname').text(name);
        $('#emailusername').text(username);
        $('#agentid').val(agent_id);
        $('#propertyid').val(id);
        

    }
</script>
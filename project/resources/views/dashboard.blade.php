<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <span> Count : </span>
        <span id="countUser"> loading ...</span>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded' , ()=>{
            GetCount();
        });
        async function GetCount(){
            const countUser = document.getElementById('countUser');
            const res = await fetch('/getCount',{
                method : 'GET',
                headers : {
                    'X-CSRF-TOKEN' : '{{csrf_token()}}'
                }
            });
            if(!res.ok) {
                alert('Failed to fetch')
                return;
            }
            const data = await res.json();
            countUser.innerHTML = data;
        }
    </script>
</body>
</html>

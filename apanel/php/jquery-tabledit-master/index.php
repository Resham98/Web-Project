<html>
    <head>
    <script src="jquery.tabledit.js"></script>
    <script src="jquery.tabledit.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
        
    </script>
    <script>$.noConflict();</script>
    
</head>
    <script>
    $('#example1').Tabledit({
    url: 'example.php',
    columns: {
        identifier: [0, 'id'],
        editable: [[1, 'nickname'], [2, 'firstname'], [3, 'lastname']]
    }
});
    </script>
    
    </head>
    <body>
        hello
        <table id="example1">
            
        </table>
        
    </body>
</html>
    
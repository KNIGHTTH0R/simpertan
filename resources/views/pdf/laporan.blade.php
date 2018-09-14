<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=Windows-1252">
    <title></title>
    <style>
            @page {
                margin: 0px;
                width: 330mm;
                height: 215mm;
            }

            body {
                font-family: Verdana, Geneva, sans-serif;
                font-size: 12px;
            }

            h1 {
                padding: 0px;
                margin: 0px;
                font-size: 16px;
                text-align: center;
                font-weight: bold;
                padding-bottom: 10px;
                margin-top: -10px;
                text-transform: uppercase;
            }

            h2 {
                padding: 0px;
                margin: 0px;
                font-size: 14px;
                text-align: center;
                font-weight: bold;
                padding-bottom: 10px;
                margin-top: -10px;
                text-transform: uppercase;
            }

            .wrapper {
                padding: 0px 50px 10px 50px;
            }

            .atasnama td {
                text-align: center;
            }

            .right_colom {
                padding-left: 400px;
            }

            .data_colom {
                padding-left: 30px;
            }

            .data_table {
                border-collapse: collapse;
            }

            .data_table th {
                vertical-align: middle;
                text-align: center;
                font-size: 11px;
                font-weight: bold;
                height: 30px;
                border: 1px solid #999;
                background: #FF0;
            }

            .data_table td {
                vertical-align: middle;
                text-align: left;
                font-size: 11px;
                border: 1px solid #999;
                padding-left: 5px;
                padding-right: 5px;
                font-family: Tahoma, Geneva, sans-serif;
                height: 20px;
            }

            td span {
                text-align: left;
                font-size: 11px;
                height: 20px;
                padding-left: 5px;
                padding-top: 5px;
                text-decoration: underline;
                font-style: italic;
            }

            .data_table1 {
                border-collapse: collapse;
            }

            .data_table1 td {
                vertical-align: middle;
                text-align: left;
                font-size: 12px;
                height: 13px;
                padding-left: 5px;
            }

            .specialy {
                text-align: center;
            }

            #catatan {
                float: left;
                width: 400px;
                height: 60px;
                -webkit-border-radius: 8px;
                -moz-border-radius: 8px;
                border-radius: 8px;
                border: 1px #999 solid;
                text-align: left;
                font-weight: bold;
                color: #666;
                padding: 5px;
            }

            @media print {
                .data_table th {
                    vertical-align: middle;
                    text-align: center;
                    font-size: 11px;
                    font-weight: bold;
                    height: 30px;
                    border: 1px solid #999;
                    background-color: #FF0;
                }
            }
        </style>
        <script src="//code.jquery.com/jquery.min.js"></script>
        <script type="text/javascript">
        var tableToExcel = (function() {
          var uri = 'data:application/vnd.ms-excel;base64,',
              template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>',
              base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
            , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
          return function(table, name) {
            if (!table.nodeType) table = document.getElementById(table)
            var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
            window.location.href = uri + base64(format(template, ctx))
          }
        })()
        </script>
  </head>
  <body>
    <table>

    </table>
  </body>
</html>

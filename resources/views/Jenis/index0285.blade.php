<head>
    <meta name="viewport" content="width=device-width, initial-scale=1 ">
    <title>DATA JENIS BUKU</title>
    <h3>Data Jenis Buku</h3>
    <style>
    
        table{
            border-collapse: collaspse;
            border-spacing: 0;
            width: 100%;
            border 1px solid #ffcce5;
        }
        thead {

            background-color: #66ffff;
        }
        th,
        td {
            text-alight: left;
            padding: 7px;
        }
        tr:nth-child(even) {

            background-color: #f2f2f2;
        }
        .tambah {

            padding: 7px 14px;
            text-decoration: none;
        }
    
    </style>
</head>

<body>
    <div style="overflow-%: auto">

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id</th>
                    <th>Jenis</th>

                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($jenis as $b)

                <tr>
                    <th>{{ $no++ }}</th>
                    <th>{{ $b->id }}</th>
                    <th>{{ $b->jenis }}</th>
    
                </tr>
                
                @endforeach
            
            </tbody>
        </table>
        
    </div>
</body>
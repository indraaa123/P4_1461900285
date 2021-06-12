<head>
    <meta name="viewport" content="width=device-width, initial-scale=1 ">
    <title>DATA RAK BUKU</title>
    <h3>Data Rak Buku</h3>
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
                    <th>Id Buku</th>
                    <th>Id Jenis buku</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($data_rak as $b)

                <tr>
                    <th>{{ $no++ }}</th>
                    <th>{{ $b->id }}</th>
                    <th>{{ $b->id_buku }}</th>
                    <th>{{ $b->id_jenis_buku }}</th>
                    
                </tr>
                
                @endforeach
            
            </tbody>
        </table>
        
    </div>
</body>
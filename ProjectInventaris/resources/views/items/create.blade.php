<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Barang</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #1e90ff 0%, #6f42c1 100%);
            color: #333;
        }

        .container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px 20px;
        }

        .form-box {
            width: 100%;
            max-width: 500px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 18px;
            padding: 30px 25px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
        }

        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            max-width: 100%;
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #444;
        }

        input, select, button {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 15px;
            border: 1px solid #d0d7de;
            border-radius: 8px;
            font-size: 14px;
        }

        input:focus, select:focus {
            outline: none;
            border-color: #6f42c1;
            box-shadow: 0 0 0 3px rgba(111, 66, 193, 0.15);
        }

        button {
            background: linear-gradient(135deg, #1e90ff, #6f42c1);
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s ease;
        }

        button:hover {
            background: linear-gradient(135deg, #1877d2, #5a37a8);
        }

        .success-message {
            color: green;
            margin-bottom: 15px;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h2>Formulir tambah barang inventaris kantor</h2>

            {{--panggil kondisi bawaan laravel jika data berhasil di simpan muncul pesan success--}}
            @if(session('success'))
                <div class="success-message">{{ session('success') }}</div>
            @endif

            {{--formulir memgarah ke route store milik item--}}
            <form action="{{ route('items.store') }}" method="POST">
                @csrf {{--wajib ada di form laravel--}}
                <label>Kode Barang:</label>
                <input type="text" name="code" required placeholder="Inv-001"><br>

                <label>Nama Barang:</label>
                <input type="text" name="item_name" required placeholder="Laptop"><br>

                <label>Kategori:</label>
                <input type="text" name="category" required placeholder="Elektronik"><br>

                <label>Stok:</label>
                <input type="number" name="stok" required value="000"><br>

                <label>Kondisi:</label>
                <select name="condition" required>
                    <option value="baik">Baik</option>
                    <option value="rusak">Rusak</option>
                    <option value="rusak berat">Rusak Berat</option>
                </select><br>

                <label>Lokasi Ruangan:</label>
                <input type="text" name="room_location" required placeholder="Ruang Hrd"><br>

                <button type="submit">Simpan Barang</button>
            </form>
        </div>
    </div>
</body>
</html>
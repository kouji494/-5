<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品一覧</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f5f7fa, #e9eef5);
            color: #222;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: 60px auto;
        }

        .title-box {
            background: #ffffff;
            border-radius: 18px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        h1 {
            margin: 0 0 10px;
            font-size: 36px;
        }

        .count {
            color: #666;
            font-size: 16px;
        }

        .table-card {
            background: #ffffff;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background: #1f2937;
            color: white;
        }

        th {
            padding: 18px;
            text-align: left;
            font-size: 15px;
        }

        td {
            padding: 18px;
            border-bottom: 1px solid #eeeeee;
        }

        tbody tr {
            transition: 0.2s;
        }

        tbody tr:hover {
            background: #f8fafc;
            transform: scale(1.002);
        }

        .price {
            font-weight: bold;
        }

        .stock {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 20px;
            background: #edf2f7;
        }

        .category {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 20px;
            background: #e8f0ff;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            color: #777;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="title-box">
            <h1>商品一覧</h1>
            <p class="count">
                全{{ count($products) }}件の商品があります。
            </p>
        </div>

        <div class="table-card">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>商品名</th>
                        <th>価格</th>
                        <th>在庫</th>
                        <th>カテゴリ</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td class="price">
                                ¥{{ number_format($product->price) }}
                            </td>
                            <td>
                                <span class="stock">
                                    {{ $product->stock }}
                                </span>
                            </td>
                            <td>
                                <span class="category">
                                    {{ $product->category }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="footer">
            Product Management System
        </div>

    </div>

</body>

</html>
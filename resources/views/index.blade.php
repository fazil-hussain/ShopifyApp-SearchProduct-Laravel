<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/uptown.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>

<body>
    <main>
        <section>

            <article>

                <div class="card">
                    <div class="column four">
                        <h3 class="red">Search Products</h3>
                    </div>
                    <div class="column eight">
                        <input id="searchinput"  type="search" />

                    </div>
                    <table>
                        <thead>
                            <tr>
                                {{-- <th colspan="2">Image</th> --}}
                                <th>Image</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="tdata">
                            <tr><td><h3>No Record</h3></td></tr>
                        </tbody>
                    </table>

                </div>
            </article>
        </section>
    </main>
</body>

</html>
@include('jsfile')

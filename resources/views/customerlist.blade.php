<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Customer List</title>

        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
        <script>
            $(document).ready(function () {
                $('#example').DataTable();
            });
        </script>
        <!-- Bootstrap CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    </head>
    <body>

        <section class="position-absolute top-10 start-50 translate-middle-x w-75 pt-5">
            
            <h2 class="text-success">Customer List</h2>
            <a class="text-success" href="/"><h5>Back to form</h5></a>

            <table class="table text-success" id="example">
                <thead>
                <tr>
                    <th scope="col">Company Name</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Contact No.</th>
                    <th scope="col">House No.</th>
                    <th scope="col">Street</th>
                    <th scope="col">Town/City</th>
                    <th scope="col">Post Code</th>
                    <th scope="col">Map</th>
                </tr>
                </thead>
                <tbody>

                    @foreach ($customers as $customer)

                        @php 
                            $fulladdress = $customer->house_number ." ". $customer->street ." ". $customer->town_city ." ". $customer->post_code;
                            $url = str_replace(" ", "+", $fulladdress);
                        @endphp

                        <tr class="align-middle fs-6">
                            <td> {{ $customer->company_name }} </td> 
                            <td> {{ $customer->first_name }} </td>
                            <td> {{ $customer->last_name }} </td>
                            <td> {{ $customer->contact_number }} </td>
                            <td> {{ $customer->house_number }} </td>
                            <td> {{ $customer->street }} </td>
                            <td> {{ $customer->town_city }} </td>
                            <td> {{ $customer->post_code }} </td>

                            <td>
                                <a href="https://www.google.co.uk/maps/place/{{ $url }}" target="_blank">
                                    <img class="border-success rounded-3" src="https://maps.googleapis.com/maps/api/staticmap?center={{ $url }} &zoom=10&size=125x125&markers=color:green|label:E|{{ $url }}&key={{ env('GOOGLE_MAPS_API_KEY') }}" alt="Customer address map">
                                </a>
                            </td>
                        </tr>

                    @endforeach
                    
                </tbody>
            </table>

            <a class="text-success" href="/"><h5>Back to form</h5></a>

        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>


<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Dashboard"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <table id="restaurantsTable" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Restaurant Name</th>
                        <th>Address</th>
                        <th>Owner Name</th>
                        <th>Violation</th>
                        <th>Inspector Name</th>
                        <th class="no-export">Action</th> <!-- Added no-export class -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($inspections as $item)
                    <tr>
                        <td>{{ ($item->restaurant)->name }}</td>
                        <td>{{ ($item->restaurant)->address }}</td>
                        <td>{{ $item->restaurant->owner->name }}</td>
                        <td>{{ $item->violation->descr }}</td>
                        <td>{{ $item->inspector->name }}</td>
                        <td>
                            <a href="#" class="btn btn-success btn-sm" style="border-radius:7px;">Update</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    <x-plugins></x-plugins>
</x-layout>
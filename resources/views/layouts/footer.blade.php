<!-- Footer -->
<footer class="bg-gray-800 text-white p-4 w-full">
    <div class="container py-6 mx-auto">
        <div class="flex flex-col md:flex-row justify-between">
            <div class="mb-4 md:mb-0">
                <h5>Informasi Kontak</h5>
                {{-- <p>Alamat: Jl. Contoh No. 123, Desa Palar, Klaten</p>
                <p>Email: info@example.com</p>
                <p>Telepon: (123) 456-7890</p> --}}
            </div>
            <div>
                <h5>Ikuti Kami</h5>
                <ul class="list-none p-0">
                    <li class="mb-2"><a href="#" class="flex items-center"><i class="fab fa-facebook mr-2"></i> Facebook</a></li>
                    {{-- <li class="mb-2"><a href="#" class="flex items-center"><i class="fab fa-twitter mr-2"></i> Twitter</a></li>
                    <li><a href="#" class="flex items-center"><i class="fab fa-instagram mr-2"></i> Instagram</a></li> --}}
                </ul>
            </div>
        </div>
    </div>
    <div class="text-center py-2">
        &copy; {{ date('Y') }} Nama Website Anda. All rights reserved.
    </div>
</footer>

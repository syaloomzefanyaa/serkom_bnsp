<footer class="relative bg-blue-800 pt-8 pb-6 pl-64">
    <div class="container mx-auto px-6">
        <!-- Bagian untuk menampilkan heading dan deskripsi -->
        <div class="flex flex-wrap text-left lg:text-left md:px-5">
            <div class="w-full lg:w-6/12">
                <h4 class="text-3xl font-semibold text-white">Website Pendaftaran Beasiswa</h4>
                <h5 class="text-lg mt-0 mb-2 font-reguler text-medium text-white">
                    Memberikan akses pendidikan berkualitas untuk masa depan yang lebih cerah.
                </h5>
            </div>

            <!-- Bagian untuk menampilkan link penting dan resource lainnya -->
            <div class="w-full lg:w-6/12">
                <div class="flex flex-wrap items-top mb-6">
                    <!-- Kolom untuk link 'Useful Links' -->
                    <div class="w-full lg:w-4/12 ml-auto">
                        <span class="block uppercase text-white text-sm font-semibold mb-2">Useful Links</span>
                        <ul class="list-unstyled">
                            <li>
                                <a class="text-gray-600 text-white font-reguler hover:font-semibold block pb-2 text-sm"
                                    href="#">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a class="text-gray-600 text-white font-reguler hover:font-semibold block pb-2 text-sm"
                                    href="#">
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a class="text-gray-600 text-white font-reguler hover:font-semibold block pb-2 text-sm"
                                    href="#">
                                    Github
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Kolom untuk link 'Other Resources' -->
                    <div class="w-full lg:w-4/12">
                        <span class="block uppercase text-white text-sm font-semibold mb-2">Other Resources</span>
                        <ul class="list-unstyled">
                            <li>
                                <a class="text-gray-600 text-white font-reguler hover:font-semibold block pb-2 text-sm"
                                    href="#">
                                    Terms & Conditions
                                </a>
                            </li>
                            <li>
                                <a class="text-gray-600 text-white font-reguler hover:font-semibold block pb-2 text-sm"
                                    href="#">
                                    Privacy Policy
                                </a>
                            </li>
                            <li>
                                <a class="text-gray-600 text-white font-reguler hover:font-semibold block pb-2 text-sm"
                                    href="#">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Garis pemisah -->
        <hr class="my-6 border-blueGray-300">

        <!-- Bagian copyright -->
        <div class="flex flex-wrap items-center md:justify-between justify-center">
            <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                <div class="text-sm text-white font-reguler py-1">
                    <!-- Tahun otomatis diubah dengan JavaScript -->
                    Copyright © <span id="get-current-year">2024</span>
                    <a href="#" class="text-white font-reguler" target="_blank">
                        Sertifikasi Kompetensi BNSP
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Tambahkan JavaScript untuk memperbarui tahun secara otomatis -->
<script>
    document.getElementById('get-current-year').textContent = new Date().getFullYear();
</script>

<!-- Javascript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmReservation() {
            Swal.fire({
                title: "حجز ناجح!",
            text: "تم الحجز بنجاح",
            icon: "success",
            confirmButtonText: "حسنًا"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById("reservationForm").submit();
                }
            });
        }
    </script>
    <script src="{{ asset('js/main.js') }}"></script>


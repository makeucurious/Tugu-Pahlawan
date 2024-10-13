@extends('layout.main')
@section('headnfoot')

@include('partials.navbar')

<main class="main">

    <!-- Portfolio Details Section -->
    <section class="ticket section" style="padding-top: 0;">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-between gy-4 mt-4">
                <div style="width: 55%;" data-aos="fade-up">
                    <h2>General Admission</h2>
                    <p>Please input general admission information before adding additional experiences to your visit.</p>
                    <p>Tickets may also be purchased on site at the front desk when you arrive.</p>
                    <div class="col">
      <div class="p-3"><i class="bi bi-exclamation-circle"></i> Students are not charged a fee if they bring their ID card directly to the museum</div>
    </div>
                    <h3>How many are visiting the museum?</h3>
                    <div class="row" style="font-family: poppins;">
                        <div class="col-8 ticket-type">
                            <div class="ticket-text">
                                <strong class="label">Adult</strong>
                                IDR 8.000
                                <small style="font-size: 10px;">(Online Price, 18+)</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="text-center">
                                <div class="counter-wrapper">
                                    <button class="action-btn primary picker" id="decrement">-</button>
                                    <div class="counter" id="counter">0</div>
                                    <button class="action-btn primary picker" id="increment">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="width: 30%;" data-aos="fade-up" data-aos-delay="100">
                <div class="cart-container">
        <div class="cart-header">
            <div class="back-arrow">&#10094;</div>
            <h2>Your Cart</h2>
        </div>

        <table class="cart-table">
            <thead style="font-family: poppins;">
                <tr>
                    <th>Item</th>
                    <th>Qty</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <span class="item-name">Adult Ticket</span><br>
                        <span class="item-date" id="bookingDateDisplay">-</span>
                    </td>
                    <td id="ticketCount">0</td>
                    <td id="totalPrice">IDR 0</td>
                </tr>
            </tbody>
        </table>

        <div class="reserve-tickets">
        <button class="btn btn-danger" id="checkoutBtn">Reserve Ticket</button>
        </div>
    </div>
                </div>
            </div>

            <div class="row" style="font-family: poppins;">
                <div class="col-8">
                    <div class="ticket-text">
                        <div id="bookingDatePicker" class="form-control"></div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- /Portfolio Details Section -->

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!-- SweetAlert -->
</main>
@endsection

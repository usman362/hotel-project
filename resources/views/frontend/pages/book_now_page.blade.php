@extends('frontend.layouts.app')
@section('content')
<main>
    <div class="main-banner position-relative">
        <img src="./assets/images/contact-banner.jpg" alt="" />
        <div class="banner-heading">
            <h1>Checkout</h1>
        </div>
    </div>
    <div id="book_now_section">
        <div class="c">
            <div class="book-heading flex flex-between">
                <h1 class="book-heading_title">
                    Pharaohs Nile Cruise Adventure - 5 Star
                </h1>
                <div class="book-heading_action-bar flex">
                    <button class="js-help__button help book-heading_action-bar-button round-button" data-cy="bnp-action-bar--cta-help">Help</button>
                    <button class="mail book-heading_action-bar-button round-button" data-cy="bnp-action-bar--cta-share-tour">Share Tour</button>
                </div>
            </div>
            <div class="book">
                <div class="left">
                    <div class="saleLine"></div>
                    <div class="block card form-block departure" data-block-type="Departure" data-cy="bnp-departure">
                        <div class="head flex flex-center"><h3>Your adventure overview</h3></div>
                        <div class="head--calendar">
                            <div class="head--calendar--left">
                                <div class="head--calendar--left__date-start"><span class="js-date-start--day">Saturday</span>, <span class="js-date-start" data-cy="bnp-departure--start-date">January 7th, 2023</span></div>
                                <div class="head--calendar--left__date-end">to <span class="js-date-end--day">Saturday</span>, <span class="js-date-end" data-cy="bnp-departure--end-date">January 14th, 2023</span></div>
                                <a href="#" class="change js-change-date" data-cy="bnp-departure--change-date">Change date</a>
                            </div>
                            <div class="head--calendar--right">
                                <div class="i icon currency usd" data-cy="bnp-tour-overview--confirm-message">
                                    You will only be charged once your space is confirmed.
                                </div>
                                <div class="seats icon orange" data-cy="bnp-tour-overview--seats-message"><strong>6 spaces left</strong> and yours is reserved for the next 10 minutes</div>
                                <div class="icon deal" data-cy="bnp-tour-overview--special-deal">
                                    Up to 50% OFF Saving on the Best of Egypt Tours.
                                    <a href="#" class="promotionPopup" data-id="921534" data-tour-id="111022" data-variant-id="726456161" data-pax="1" data-cy="bnp-tour-overview--special-deal-link">See details</a>
                                </div>
                            </div>
                        </div>
                        <div class="js-calendar calendar hid">
                            <div class="js-calendar__months calendar__months">
                                <div class="js-calendar__months-arrow js-calendar__months-arrow--left calendar__months-arrow calendar__months-arrow--left inactive" data-cy="bnp-calendar--month-arrow-left"></div>
                                <div class="js-calendar__months-content calendar__months-content">
                                    <ul class="js-calendar__months-selector calendar__months-selector">
                                        <li id="month-2023-01" class="js-calendar__month calendar__month calendar__month--selected with-date" data-cy="bnp-calendar--month-jan-2023">
                                            <div calss="calendar__month-label">
                                                Jan 2023
                                            </div>
                                        </li>
                                        <li id="month-2023-02" class="js-calendar__month calendar__month" data-cy="bnp-calendar--month-feb-2023">
                                            <div calss="calendar__month-label">
                                                Feb 2023
                                            </div>
                                        </li>
                                        <li id="month-2023-03" class="js-calendar__month calendar__month" data-cy="bnp-calendar--month-mar-2023">
                                            <div calss="calendar__month-label">
                                                Mar 2023
                                            </div>
                                        </li>
                                        <li id="month-2023-04" class="js-calendar__month calendar__month" data-cy="bnp-calendar--month-apr-2023">
                                            <div calss="calendar__month-label">
                                                Apr 2023
                                            </div>
                                        </li>
                                        <li id="month-2023-05" class="js-calendar__month calendar__month" data-cy="bnp-calendar--month-may-2023">
                                            <div calss="calendar__month-label">
                                                May 2023
                                            </div>
                                        </li>
                                        <li id="month-2023-06" class="js-calendar__month calendar__month" data-cy="bnp-calendar--month-jun-2023">
                                            <div calss="calendar__month-label">
                                                Jun 2023
                                            </div>
                                        </li>
                                        <li id="month-2023-07" class="js-calendar__month calendar__month" data-cy="bnp-calendar--month-jul-2023">
                                            <div calss="calendar__month-label">
                                                Jul 2023
                                            </div>
                                        </li>
                                        <li id="month-2023-08" class="js-calendar__month calendar__month" data-cy="bnp-calendar--month-aug-2023">
                                            <div calss="calendar__month-label">
                                                Aug 2023
                                            </div>
                                        </li>
                                        <li id="month-2023-09" class="js-calendar__month calendar__month" data-cy="bnp-calendar--month-sep-2023">
                                            <div calss="calendar__month-label">
                                                Sep 2023
                                            </div>
                                        </li>
                                        <li id="month-2023-10" class="js-calendar__month calendar__month" data-cy="bnp-calendar--month-oct-2023">
                                            <div calss="calendar__month-label">
                                                Oct 2023
                                            </div>
                                        </li>
                                        <li id="month-2023-11" class="js-calendar__month calendar__month" data-cy="bnp-calendar--month-nov-2023">
                                            <div calss="calendar__month-label">
                                                Nov 2023
                                            </div>
                                        </li>
                                        <li id="month-2023-12" class="js-calendar__month calendar__month" data-cy="bnp-calendar--month-dec-2023">
                                            <div calss="calendar__month-label">
                                                Dec 2023
                                            </div>
                                        </li>
                                        <li id="month-2024-01" class="js-calendar__month calendar__month" data-cy="bnp-calendar--month-jan-2024">
                                            <div calss="calendar__month-label">
                                                Jan 2024
                                            </div>
                                        </li>
                                        <li id="month-2024-02" class="js-calendar__month calendar__month" data-cy="bnp-calendar--month-feb-2024">
                                            <div calss="calendar__month-label">
                                                Feb 2024
                                            </div>
                                        </li>
                                        <li id="month-2024-03" class="js-calendar__month calendar__month" data-cy="bnp-calendar--month-mar-2024">
                                            <div calss="calendar__month-label">
                                                Mar 2024
                                            </div>
                                        </li>
                                        <li id="month-2024-04" class="js-calendar__month calendar__month" data-cy="bnp-calendar--month-apr-2024">
                                            <div calss="calendar__month-label">
                                                Apr 2024
                                            </div>
                                        </li>
                                        <li id="month-2024-05" class="js-calendar__month calendar__month" data-cy="bnp-calendar--month-may-2024">
                                            <div calss="calendar__month-label">
                                                May 2024
                                            </div>
                                        </li>
                                        <li id="month-2024-06" class="js-calendar__month calendar__month" data-cy="bnp-calendar--month-jun-2024">
                                            <div calss="calendar__month-label">
                                                Jun 2024
                                            </div>
                                        </li>
                                        <li id="month-2024-07" class="js-calendar__month calendar__month" data-cy="bnp-calendar--month-jul-2024">
                                            <div calss="calendar__month-label">
                                                Jul 2024
                                            </div>
                                        </li>
                                        <li id="month-2024-08" class="js-calendar__month calendar__month" data-cy="bnp-calendar--month-aug-2024">
                                            <div calss="calendar__month-label">
                                                Aug 2024
                                            </div>
                                        </li>
                                        <li id="month-2024-09" class="js-calendar__month calendar__month" data-cy="bnp-calendar--month-sep-2024">
                                            <div calss="calendar__month-label">
                                                Sep 2024
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="js-calendar__months-arrow js-calendar__months-arrow--right calendar__months-arrow calendar__months-arrow--right" data-cy="bnp-calendar--month-arrow-right"></div>
                            </div>
                            <div class="js-calendar__dates">
                                <table class="calendar__table">
                                    <tbody>
                                        <tr>
                                            <th class="calendar__cell calendar__cell-head">Mon</th>
                                            <th class="calendar__cell calendar__cell-head">Tue</th>
                                            <th class="calendar__cell calendar__cell-head">Wed</th>
                                            <th class="calendar__cell calendar__cell-head">Thr</th>
                                            <th class="calendar__cell calendar__cell-head">Fri</th>
                                            <th class="calendar__cell calendar__cell-head">Sat</th>
                                            <th class="calendar__cell calendar__cell-head">Sun</th>
                                        </tr>
                                        <tr class="calendar__row">
                                            <td class="calendar__cell--blank"></td>
                                            <td class="calendar__cell--blank"></td>
                                            <td class="calendar__cell--blank"></td>
                                            <td class="calendar__cell--blank"></td>
                                            <td class="calendar__cell--blank"></td>
                                            <td class="calendar__cell--blank"></td>
                                            <td id="day-2023-01-01" class="calendar__cell calendar__cell--unavailable" data-cy="bnp-departure--day">
                                                <div class="container">
                                                    <div class="calendar__cell-label">1</div>
                                                    <div class="calendar__button--next js-calendar__button--next"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="calendar__row">
                                            <td id="day-2023-01-02" class="calendar__cell calendar__cell--unavailable" data-cy="bnp-departure--day">
                                                <div class="container">
                                                    <div class="calendar__cell-label">2</div>
                                                    <div class="calendar__button--next js-calendar__button--next"></div>
                                                </div>
                                            </td>
                                            <td id="day-2023-01-03" class="calendar__cell calendar__cell--unavailable" data-cy="bnp-departure--day">
                                                <div class="container">
                                                    <div class="calendar__cell-label">3</div>
                                                    <div class="calendar__button--next js-calendar__button--next"></div>
                                                </div>
                                            </td>
                                            <td id="day-2023-01-04" class="calendar__cell calendar__cell--unavailable" data-cy="bnp-departure--day">
                                                <div class="container">
                                                    <div class="calendar__cell-label">4</div>
                                                    <div class="calendar__button--next js-calendar__button--next"></div>
                                                </div>
                                            </td>
                                            <td id="day-2023-01-05" class="calendar__cell calendar__cell--unavailable" data-cy="bnp-departure--day">
                                                <div class="container">
                                                    <div class="calendar__cell-label">5</div>
                                                    <div class="calendar__button--next js-calendar__button--next"></div>
                                                </div>
                                            </td>
                                            <td id="day-2023-01-06" class="calendar__cell calendar__cell--unavailable" data-cy="bnp-departure--day">
                                                <div class="container">
                                                    <div class="calendar__cell-label">6</div>
                                                    <div class="calendar__button--next js-calendar__button--next"></div>
                                                </div>
                                            </td>
                                            <td id="day-2023-01-07" class="calendar__cell possible calendar__cell--departure calendar__cell--selected" data-cy="bnp-departure--day">
                                                <div class="container">
                                                    <div class="calendar__cell-label">7</div>
                                                    <div class="price calendar__cell-price">$730</div>
                                                    <div class="calendar__cell-promotion"></div>
                                                    <div class="calendar__button--next js-calendar__button--next"></div>
                                                </div>
                                            </td>
                                            <td id="day-2023-01-08" class="calendar__cell calendar__cell--unavailable" data-cy="bnp-departure--day">
                                                <div class="container">
                                                    <div class="calendar__cell-label">8</div>
                                                    <div class="calendar__button--next js-calendar__button--next"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="calendar__row">
                                            <td id="day-2023-01-09" class="calendar__cell calendar__cell--unavailable" data-cy="bnp-departure--day">
                                                <div class="container">
                                                    <div class="calendar__cell-label">9</div>
                                                    <div class="calendar__button--next js-calendar__button--next"></div>
                                                </div>
                                            </td>
                                            <td id="day-2023-01-10" class="calendar__cell calendar__cell--unavailable" data-cy="bnp-departure--day">
                                                <div class="container">
                                                    <div class="calendar__cell-label">10</div>
                                                    <div class="calendar__button--next js-calendar__button--next"></div>
                                                </div>
                                            </td>
                                            <td id="day-2023-01-11" class="calendar__cell calendar__cell--unavailable" data-cy="bnp-departure--day">
                                                <div class="container">
                                                    <div class="calendar__cell-label">11</div>
                                                    <div class="calendar__button--next js-calendar__button--next"></div>
                                                </div>
                                            </td>
                                            <td id="day-2023-01-12" class="calendar__cell calendar__cell--unavailable" data-cy="bnp-departure--day">
                                                <div class="container">
                                                    <div class="calendar__cell-label">12</div>
                                                    <div class="calendar__button--next js-calendar__button--next"></div>
                                                </div>
                                            </td>
                                            <td id="day-2023-01-13" class="calendar__cell calendar__cell--unavailable" data-cy="bnp-departure--day">
                                                <div class="container">
                                                    <div class="calendar__cell-label">13</div>
                                                    <div class="calendar__button--next js-calendar__button--next"></div>
                                                </div>
                                            </td>
                                            <td id="day-2023-01-14" class="calendar__cell possible calendar__cell--departure" data-cy="bnp-departure--day">
                                                <div class="container">
                                                    <div class="calendar__cell-label">14</div>
                                                    <div class="price calendar__cell-price">$730</div>
                                                    <div class="calendar__cell-promotion"></div>
                                                    <div class="calendar__button--next js-calendar__button--next"></div>
                                                </div>
                                            </td>
                                            <td id="day-2023-01-15" class="calendar__cell calendar__cell--unavailable" data-cy="bnp-departure--day">
                                                <div class="container">
                                                    <div class="calendar__cell-label">15</div>
                                                    <div class="calendar__button--next js-calendar__button--next"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="calendar__row">
                                            <td id="day-2023-01-16" class="calendar__cell calendar__cell--unavailable" data-cy="bnp-departure--day">
                                                <div class="container">
                                                    <div class="calendar__cell-label">16</div>
                                                    <div class="calendar__button--next js-calendar__button--next"></div>
                                                </div>
                                            </td>
                                            <td id="day-2023-01-17" class="calendar__cell calendar__cell--unavailable" data-cy="bnp-departure--day">
                                                <div class="container">
                                                    <div class="calendar__cell-label">17</div>
                                                    <div class="calendar__button--next js-calendar__button--next"></div>
                                                </div>
                                            </td>
                                            <td id="day-2023-01-18" class="calendar__cell calendar__cell--unavailable" data-cy="bnp-departure--day">
                                                <div class="container">
                                                    <div class="calendar__cell-label">18</div>
                                                    <div class="calendar__button--next js-calendar__button--next"></div>
                                                </div>
                                            </td>
                                            <td id="day-2023-01-19" class="calendar__cell calendar__cell--unavailable" data-cy="bnp-departure--day">
                                                <div class="container">
                                                    <div class="calendar__cell-label">19</div>
                                                    <div class="calendar__button--next js-calendar__button--next"></div>
                                                </div>
                                            </td>
                                            <td id="day-2023-01-20" class="calendar__cell calendar__cell--unavailable" data-cy="bnp-departure--day">
                                                <div class="container">
                                                    <div class="calendar__cell-label">20</div>
                                                    <div class="calendar__button--next js-calendar__button--next"></div>
                                                </div>
                                            </td>
                                            <td id="day-2023-01-21" class="calendar__cell possible calendar__cell--departure" data-cy="bnp-departure--day">
                                                <div class="container">
                                                    <div class="calendar__cell-label">21</div>
                                                    <div class="price calendar__cell-price">$730</div>
                                                    <div class="calendar__cell-promotion"></div>
                                                    <div class="calendar__button--next js-calendar__button--next"></div>
                                                </div>
                                            </td>
                                            <td id="day-2023-01-22" class="calendar__cell calendar__cell--unavailable" data-cy="bnp-departure--day">
                                                <div class="container">
                                                    <div class="calendar__cell-label">22</div>
                                                    <div class="calendar__button--next js-calendar__button--next"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="calendar__row">
                                            <td id="day-2023-01-23" class="calendar__cell calendar__cell--unavailable" data-cy="bnp-departure--day">
                                                <div class="container">
                                                    <div class="calendar__cell-label">23</div>
                                                    <div class="calendar__button--next js-calendar__button--next"></div>
                                                </div>
                                            </td>
                                            <td id="day-2023-01-24" class="calendar__cell calendar__cell--unavailable" data-cy="bnp-departure--day">
                                                <div class="container">
                                                    <div class="calendar__cell-label">24</div>
                                                    <div class="calendar__button--next js-calendar__button--next"></div>
                                                </div>
                                            </td>
                                            <td id="day-2023-01-25" class="calendar__cell calendar__cell--unavailable" data-cy="bnp-departure--day">
                                                <div class="container">
                                                    <div class="calendar__cell-label">25</div>
                                                    <div class="calendar__button--next js-calendar__button--next"></div>
                                                </div>
                                            </td>
                                            <td id="day-2023-01-26" class="calendar__cell calendar__cell--unavailable" data-cy="bnp-departure--day">
                                                <div class="container">
                                                    <div class="calendar__cell-label">26</div>
                                                    <div class="calendar__button--next js-calendar__button--next"></div>
                                                </div>
                                            </td>
                                            <td id="day-2023-01-27" class="calendar__cell calendar__cell--unavailable" data-cy="bnp-departure--day">
                                                <div class="container">
                                                    <div class="calendar__cell-label">27</div>
                                                    <div class="calendar__button--next js-calendar__button--next"></div>
                                                </div>
                                            </td>
                                            <td id="day-2023-01-28" class="calendar__cell possible calendar__cell--departure" data-cy="bnp-departure--day">
                                                <div class="container">
                                                    <div class="calendar__cell-label">28</div>
                                                    <div class="price calendar__cell-price">$730</div>
                                                    <div class="calendar__cell-promotion"></div>
                                                    <div class="calendar__button--next js-calendar__button--next"></div>
                                                </div>
                                            </td>
                                            <td id="day-2023-01-29" class="calendar__cell calendar__cell--unavailable" data-cy="bnp-departure--day">
                                                <div class="container">
                                                    <div class="calendar__cell-label">29</div>
                                                    <div class="calendar__button--next js-calendar__button--next"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="calendar__row">
                                            <td id="day-2023-01-30" class="calendar__cell calendar__cell--unavailable" data-cy="bnp-departure--day">
                                                <div class="container">
                                                    <div class="calendar__cell-label">30</div>
                                                    <div class="calendar__button--next js-calendar__button--next"></div>
                                                </div>
                                            </td>
                                            <td id="day-2023-01-31" class="calendar__cell calendar__cell--unavailable" data-cy="bnp-departure--day">
                                                <div class="container">
                                                    <div class="calendar__cell-label">31</div>
                                                    <div class="calendar__button--next js-calendar__button--next"></div>
                                                </div>
                                            </td>
                                            <td class="calendar__cell--blank"></td>
                                            <td class="calendar__cell--blank"></td>
                                            <td class="calendar__cell--blank"></td>
                                            <td class="calendar__cell--blank"></td>
                                            <td class="calendar__cell--blank"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="js-form-block paxSelection">
                        <div class="pax-selection block details form-block">
                            <div class="head flex flex-center">
                                <div class="point">1</div>
                                <h3>How many are travelling?</h3>
                            </div>
                            <div class="paxTooltips pax-selection__tooltip-wrapper">
                                <div class="popup-overlay js-pax-selection__tooltip-popup hid">
                                    <div id="maxPopupTip" class="scout-component__modal">
                                        <div class="js-scout-component__modal-dialog scout-component__modal-dialog">
                                            <div class="scout-component__modal-top">
                                                <div class="scout-component__modal-navigation">
                                                    <button title="Close (Esc)" type="button" class="mfp-close scout-component__modal-navigation-close js-pax-selection__tooltip-popup-btn--close"></button>
                                                </div>
                                                <h3 class="scout-component__modal-heading">Limited Availability</h3>
                                            </div>
                                            <div class="scout-component__modal-content pax-selection__tooltip-popup-content">
                                                You’ve selected more travellers than spaces available. You can still go ahead with your booking as there’s a chance we can book for all passengers but we can’t ensure it. If you need an immediate
                                                confirmation, please reduce amount of travellers or choose another departure date.
                                            </div>
                                            <div class="scout-component__modal-bottom pax-selection__tooltip-popup-bottom">
                                                <button class="aa-btn aa-btn--secondary aa-btn--lg js-pax-selection__tooltip-popup-btn--contact-us pax-selection__tooltip-popup-btn" type="button">
                                                    Contact us
                                                </button>
                                                <a class="aa-btn aa-btn--primary aa-btn--lg js-pax-selection__tooltip-popup-btn--close">
                                                    Okay, got it
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pax-selection__quantity pax-selection__quantity--last">
                                <div class="pax-selection__quantity-info"><span class="js-pax-selection__quantity-info-label pax-selection__quantity-info-label">Traveller</span></div>
                                <div class="pax-selection__quantity-select flex">
                                    <div class="scout-element__counter">
                                        <button
                                            disabled=""
                                            class="scout-element__counter-button--substract scout-element__counter-button--inactive js-pax-selection--substract"
                                            aria-label="-"
                                            data-cy="bnp-accommodation--pax-selection-substract"
                                        ></button>
                                        <input
                                            type="number"
                                            value="1"
                                            readonly=""
                                            max="100"
                                            min="1"
                                            id="pax-710"
                                            class="scout-element__counter-input js-pax-selection--input"
                                            aria-label="count"
                                            data-cy="bnp-accommodation--pax-selection-input"
                                            data-type-id="1"
                                            data-ga-label="Traveller"
                                        />
                                        <button class="scout-element__counter-button--add js-pax-selection--add" aria-label="+" data-cy="bnp-accommodation--pax-selection-add"></button>
                                    </div>
                                </div>
                            </div>
                            <div class="js-pax-selection__split-payment pax-selection__split-payment radio-surface hid" data-cy="bnp-pax-selector--split-payment-msg">
                                <div class="pax-selection__split-payment-content">
                                    <h4 class="pax-selection__split-payment-heading">
                                        Split Tour Payment
                                    </h4>
                                    <p class="pax-selection__split-payment-text">
                                        Book once and share the cost with split payments.
                                        <button class="js-pax-selection__split-payment-learn-more pax-selection__split-payment-learn-more" data-cy="bnp-pax-selector--split-payment-cta">
                                            Learn more
                                        </button>
                                    </p>
                                </div>
                                <button class="js-pax-selection__split-payment-close pax-selection__split-payment-close" data-cy="bnp-pax-selector--split-payment-close"></button>
                            </div>
                        </div>
                    </div>
                    <div class="block card form-block js-form-block accommodation js-bs_accommodations bs_accommodations" data-block-type="Accommodation" data-cabin="" data-cy="bnp-accommodation">
                        <div class="content accommodation" data-friends="">
                            <div class="head flex flex-center">
                                <div class="point">2</div>
                                <h3>Select accommodation</h3>
                            </div>
                            <div class="accommodation__description js-accommodation__description">
                                Please assign
                                <span class="accommodation__description-amount js-accommodation__description-amount" data-pax-type="1" data-pax-label-singular="Traveller" data-pax-label-plural="Travellers" data-pax-amount="1">1 Traveller</span>
                                to a room.
                            </div>
                            <div class="accommodation__pax-assigned js-accommodation__pax-assigned hid" data-cy="bnp-accommodation--all-pax-assigned">All travellers assigned!</div>
                            <div class="accommodation__recommended js-accommodation__recommended" data-cy="bnp-accommodation-recommended">
                                <div class="accommodation__recommended-top flex flex-between">
                                    <h5 class="accommodation__recommended-header aa-heading-h5">Best Price</h5>
                                    <span class="accommodation__recommended-close js-accommodation__recommended-close" data-cy="bnp-accommodation-recommended--dismiss"></span>
                                </div>
                                <div class="accommodation__recommended-room-wrapper flex">
                                    <div class="js-accommodation__recommended-item accommodation__recommended-item" data-room-id="22455">
                                        <div class="accommodation__recommended-room-type">Single Room</div>
                                        <div class="accommodation__recommended-to-assign"><span class="js-accommodation__recommended-pax" data-pax-num="1" data-pax-id="710">1 Traveller</span></div>
                                    </div>
                                </div>
                                <div class="accommodation__recommended-bottom flex flex-between flex-center">
                                    <span class="accommodation__recommended-description">
                                        Total accommodation price: <s class="accommodation__recommended-strikethrough">$1,860</s>
                                        <strong class="text-green">
                                            $930
                                        </strong>
                                    </span>
                                    <button class="js-accommodation__recommended-cta accommodation__recommended-cta scout-button" data-cy="bnp-accommodation-recommended--apply">Apply</button>
                                </div>
                            </div>
                            <div class="js-room-images accommodation__room-images"></div>
                            <div class="accommodation__room-types">
                                <div class="types">
                                    <div class="js-accommodation__error accommodation__error error hid" data-cy="bnp-accommodation--traveller-not-assigned">Please assign all travellers to continue with the booking process</div>
                                </div>
                                <ul class="accommodation__room-list">
                                    <li class="accommodation__room-item flex flex-between js-accommodation__room-item flex-wrap" data-id="250774" data-shared="" data-beds-number="2" data-cy="bnp-accommodation--room-beds-2-private">
                                        <div class="accommodation__room-type">
                                            <div class="accommodation__room-type-name">
                                                <span class="accommodation__room-type-name-text">Double room </span><span class="accommodation__room-type-label accommodation__room-type-label--private">Private</span>
                                            </div>
                                            <div class="accommodation__room-type-description">
                                                Per person in double room
                                            </div>
                                        </div>
                                        <div class="accommodation__room-price-wrapper">
                                            <div class="accommodation__room-price flex flex-center">
                                                <div class="accommodation__room-price-wrap flex flex-column">
                                                    <span class="accommodation__room-price--price-base">
                                                        $1,460
                                                    </span>
                                                    <span class="accommodation__room-price--price-discounted">
                                                        $730
                                                    </span>
                                                    <span class="accommodation__room-price--pax-type">per Traveller</span>
                                                </div>
                                                <div class="scout-element__select-wrapper">
                                                    <div class="scout-element__select" data-cy="bnp-accommodation--traveller-selection-traveller">
                                                        <select
                                                            id=""
                                                            name=""
                                                            class="scout-element__select-field accommodation__room-price--select js-accommodation__room-price--select"
                                                            data-id="710"
                                                            data-type-id="1"
                                                            data-shared=""
                                                            data-beds-number="2"
                                                            data-ga-pax-label="Traveller"
                                                            data-ga-room-label="Double-room-"
                                                            data-cy="bnp-accommodation--traveller-selection-traveller-select"
                                                        >
                                                            <option value="0">0 Traveller</option>
                                                            <option value="1">1 Traveller</option>
                                                        </select>
                                                    </div>
                                                    <p class="js-scout-element__error scout-element__select--error hid" data-cy="bnp-accommodation--traveller-selection-traveller-select-error"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="scout-element__message scout-element__message--warning accommodation__vacancy-warning js-accommodation__vacancy-warning hid" data-cy="bnp-accommodation--vacancy-warning-message">
                                            <p class="scout-element__message-text">This accommodation needs 2 travellers. Please add 2 travellers or choose another accommodation type.</p>
                                        </div>
                                    </li>
                                    <li class="accommodation__room-item flex flex-between js-accommodation__room-item flex-wrap" data-id="22455" data-shared="" data-beds-number="1" data-cy="bnp-accommodation--room-beds-1-private">
                                        <div class="accommodation__room-type">
                                            <div class="accommodation__room-type-name">
                                                <span class="accommodation__room-type-name-text">Single Room</span><span class="accommodation__room-type-label accommodation__room-type-label--private">Private</span>
                                            </div>
                                            <div class="accommodation__room-type-description">
                                                Enjoy the comfort and privacy of your own room.
                                            </div>
                                        </div>
                                        <div class="accommodation__room-price-wrapper">
                                            <div class="accommodation__room-price flex flex-center">
                                                <div class="accommodation__room-price-wrap flex flex-column">
                                                    <span class="accommodation__room-price--price-base">
                                                        $1,860
                                                    </span>
                                                    <span class="accommodation__room-price--price-discounted">
                                                        $930
                                                    </span>
                                                    <span class="accommodation__room-price--pax-type">per Traveller</span>
                                                </div>
                                                <div class="scout-element__select-wrapper">
                                                    <div class="scout-element__select" data-cy="bnp-accommodation--traveller-selection-traveller">
                                                        <select
                                                            id=""
                                                            name=""
                                                            class="scout-element__select-field accommodation__room-price--select js-accommodation__room-price--select"
                                                            data-id="710"
                                                            data-type-id="1"
                                                            data-shared=""
                                                            data-beds-number="1"
                                                            data-ga-pax-label="Traveller"
                                                            data-ga-room-label="Single-Room"
                                                            data-cy="bnp-accommodation--traveller-selection-traveller-select"
                                                        >
                                                            <option value="0">0 Traveller</option>
                                                            <option value="1">1 Traveller</option>
                                                        </select>
                                                    </div>
                                                    <p class="js-scout-element__error scout-element__select--error hid" data-cy="bnp-accommodation--traveller-selection-traveller-select-error"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="scout-element__message scout-element__message--warning accommodation__vacancy-warning js-accommodation__vacancy-warning hid" data-cy="bnp-accommodation--vacancy-warning-message">
                                            <p class="scout-element__message-text">This accommodation needs 1 traveller. Please add 1 traveller or choose another accommodation type.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="accommodation__friends js-accommodation__friends hid">
                                <div class="scout-element__checkbox js-accommodation__friends-checkbox accommodation__friends-checkbox" data-cy="bnp-accommodation--travel-friend-checkbox">
                                    <label for="friend" class="scout-element__checkbox-label" data-cy="bnp-accommodation--travel-friend-checkbox-label">
                                        <input id="friend" class="scout-element__checkbox-hidden" placeholder="" name="" type="checkbox" data-cy="bnp-accommodation--travel-friend-checkbox-input" />
                                        <span class="scout-element__checkbox-field"></span> I'm travelling with a friend who is booking separately
                                    </label>
                                    <p class="js-scout-element__error scout-element__checkbox--error hid" data-cy="bnp-accommodation--travel-friend-checkbox-input-error"></p>
                                </div>
                                <div class="js-accommodation__friends-form accommodation__friends-form form hid">
                                    <div class="js-accommodation__friends-form-row accommodation__friends-form-row flex flex-wrap flex-between">
                                        <div class="scout-element__input-wrapper accommodation__friends-input">
                                            <div class="scout-element__input" data-cy="bnp-accommodation--travel-friend-name">
                                                <label for="" class="scout-element__input-label" data-cy="bnp-accommodation--travel-friend-name-label">Their Name</label>
                                                <input
                                                    id=""
                                                    class="scout-element__input-field js-accommodation__friends-input-field js-accommodation__friends-input-field--name"
                                                    placeholder="e.g Jane"
                                                    name=""
                                                    type="text"
                                                    value=""
                                                    data-type="name"
                                                    data-cy="bnp-accommodation--travel-friend-name-input"
                                                />
                                            </div>
                                            <p class="js-scout-element__error scout-element__input--error hid" data-cy="bnp-accommodation--travel-friend-name-input-error"></p>
                                        </div>
                                        <div class="scout-element__input-wrapper accommodation__friends-input">
                                            <div class="scout-element__input" data-cy="bnp-accommodation--travel-friend-email">
                                                <label for="" class="scout-element__input-label" data-cy="bnp-accommodation--travel-friend-email-label">Their Email</label>
                                                <input
                                                    id=""
                                                    class="scout-element__input-field js-accommodation__friends-input-field js-accommodation__friends-input-field--email"
                                                    placeholder="e.g: jane@email.com"
                                                    name=""
                                                    type="email"
                                                    value=""
                                                    data-type="email"
                                                    data-cy="bnp-accommodation--travel-friend-email-input"
                                                />
                                            </div>
                                            <p class="js-scout-element__error scout-element__input--error hid" data-cy="bnp-accommodation--travel-friend-email-input-error"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block card form-block js-form-block extras bs_extras" data-block-type="Extras">
                        <div class="content extras">
                            <div class="head flex flex-center">
                                <div class="point">3</div>
                                <h3>Add extras</h3>
                            </div>
                            <div>
                                <ul class="extras__extra-list">
                                    <li class="extras__extra-item flex flex-between js-extras__extra-item" data-id="22458">
                                        <div class="extras__extra-type">
                                            <div class="extras__extra-type-name">
                                                Abu simbel temple
                                            </div>
                                            <div class="extras__extra-type-description">
                                                Early morning tour to the most beautiful temple in Egypt
                                            </div>
                                        </div>
                                        <div class="extras__extra-price-wrapper">
                                            <div class="extras__extra-price flex">
                                                <div class="extras__extra-price-wrap flex flex-column"><span class="extras__extra-price--price">$125</span><span class="extras__extra-price--pax-type">per Traveller</span></div>
                                                <div class="scout-element__select-wrapper">
                                                    <div class="scout-element__select" data-cy="bnp-extras--traveller-select">
                                                        <select id="" name="" class="scout-element__select-field extras__extra-price--select js-extras__extra-price--select" data-id="710" data-cy="bnp-extras--traveller-select-select">
                                                            <option value="0">0 Traveller</option>
                                                            <option value="1">1 Traveller</option>
                                                        </select>
                                                    </div>
                                                    <p class="js-scout-element__error scout-element__select--error hid" data-cy="bnp-extras--traveller-select-select-error"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="extras__extra-item flex flex-between js-extras__extra-item" data-id="22459">
                                        <div class="extras__extra-type">
                                            <div class="extras__extra-type-name">
                                                nubian village tour
                                            </div>
                                            <div class="extras__extra-type-description">
                                                Enjoy sailing&nbsp; by motor boat around the beautiful protected islands of&nbsp; Aswan cataract ,&nbsp; amazing landscapes and birds watching .stop on golden beach where it's p
                                                <span class="js-extras__read-more--dots">... </span><span class="js-extras__read-more--link extras__read-more--link"><a class="extras__read-more--link-anchor" href="#">Read more</a></span>
                                                <span class="js-extras__read-more--text extras__read-more--text hid">
                                                    erfectly safe to make a swimming on the Nile. Then stopping in&nbsp; Gharb sohail&nbsp; nubian village which has become a popular destination for those wanting a peaceful escape the hustle and
                                                    bustle of the big Egyptian cities, having a visit to a real nubian family home, see the nubian lifestyle and drink nubian tea.take a photo of the nile crocodiles. Walk through the nubian souk
                                                    ( local market) where they selling traditional local handicrafts, foods and spices.
                                                </span>
                                                <span class="js-extras__read-less--link extras__read-less--link hid"><a class="extras__read-more--link-anchor" href="#">Read less</a></span>
                                            </div>
                                        </div>
                                        <div class="extras__extra-price-wrapper">
                                            <div class="extras__extra-price flex">
                                                <div class="extras__extra-price-wrap flex flex-column"><span class="extras__extra-price--price">$59</span><span class="extras__extra-price--pax-type">per Traveller</span></div>
                                                <div class="scout-element__select-wrapper">
                                                    <div class="scout-element__select" data-cy="bnp-extras--traveller-select">
                                                        <select id="" name="" class="scout-element__select-field extras__extra-price--select js-extras__extra-price--select" data-id="710" data-cy="bnp-extras--traveller-select-select">
                                                            <option value="0">0 Traveller</option>
                                                            <option value="1">1 Traveller</option>
                                                        </select>
                                                    </div>
                                                    <p class="js-scout-element__error scout-element__select--error hid" data-cy="bnp-extras--traveller-select-select-error"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="extras__extra-item flex flex-between js-extras__extra-item" data-id="22460">
                                        <div class="extras__extra-type">
                                            <div class="extras__extra-type-name">
                                                Internal flight from Aswan to Cairo 1 way + 1 nigh hotel accommodation
                                            </div>
                                            <div class="extras__extra-type-description">
                                                Enjoy 90 minutes internal flight from Aswan to Cairo instead of the overnight sleeper train journey, this flight upgrade will include hotel accommodation for on
                                                <span class="js-extras__read-more--dots">... </span><span class="js-extras__read-more--link extras__read-more--link"><a class="extras__read-more--link-anchor" href="#">Read more</a></span>
                                                <span class="js-extras__read-more--text extras__read-more--text hid">e night with breakfast and all transfers from/to airports </span>
                                                <span class="js-extras__read-less--link extras__read-less--link hid"><a class="extras__read-more--link-anchor" href="#">Read less</a></span>
                                            </div>
                                        </div>
                                        <div class="extras__extra-price-wrapper">
                                            <div class="extras__extra-price flex">
                                                <div class="extras__extra-price-wrap flex flex-column"><span class="extras__extra-price--price">$195</span><span class="extras__extra-price--pax-type">per Traveller</span></div>
                                                <div class="scout-element__select-wrapper">
                                                    <div class="scout-element__select" data-cy="bnp-extras--traveller-select">
                                                        <select id="" name="" class="scout-element__select-field extras__extra-price--select js-extras__extra-price--select" data-id="710" data-cy="bnp-extras--traveller-select-select">
                                                            <option value="0">0 Traveller</option>
                                                            <option value="1">1 Traveller</option>
                                                        </select>
                                                    </div>
                                                    <p class="js-scout-element__error scout-element__select--error hid" data-cy="bnp-extras--traveller-select-select-error"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="extras__extra-item flex flex-between js-extras__extra-item" data-id="22461">
                                        <div class="extras__extra-type">
                                            <div class="extras__extra-type-name">
                                                Internal flight from Cairo to Luxor 1 way + 1 night hotel accommodation
                                            </div>
                                            <div class="extras__extra-type-description">
                                                Enjoy 1 hour flight instead of the overnight sleeper train journey, the flight upgrade between Cairo and luxor will include accommodation in 4* hotel with break
                                                <span class="js-extras__read-more--dots">... </span><span class="js-extras__read-more--link extras__read-more--link"><a class="extras__read-more--link-anchor" href="#">Read more</a></span>
                                                <span class="js-extras__read-more--text extras__read-more--text hid">fast and all transfers from/to airports </span>
                                                <span class="js-extras__read-less--link extras__read-less--link hid"><a class="extras__read-more--link-anchor" href="#">Read less</a></span>
                                            </div>
                                        </div>
                                        <div class="extras__extra-price-wrapper">
                                            <div class="extras__extra-price flex">
                                                <div class="extras__extra-price-wrap flex flex-column"><span class="extras__extra-price--price">$190</span><span class="extras__extra-price--pax-type">per Traveller</span></div>
                                                <div class="scout-element__select-wrapper">
                                                    <div class="scout-element__select" data-cy="bnp-extras--traveller-select">
                                                        <select id="" name="" class="scout-element__select-field extras__extra-price--select js-extras__extra-price--select" data-id="710" data-cy="bnp-extras--traveller-select-select">
                                                            <option value="0">0 Traveller</option>
                                                            <option value="1">1 Traveller</option>
                                                        </select>
                                                    </div>
                                                    <p class="js-scout-element__error scout-element__select--error hid" data-cy="bnp-extras--traveller-select-select-error"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="extras__extra-item flex flex-between js-extras__extra-item" data-id="22465">
                                        <div class="extras__extra-type">
                                            <div class="extras__extra-type-name">
                                                Sun rise hot air balloon
                                            </div>
                                            <div class="extras__extra-type-description">
                                                Enjoy the first balloon flight at sunrise time over king's valley
                                            </div>
                                        </div>
                                        <div class="extras__extra-price-wrapper">
                                            <div class="extras__extra-price flex">
                                                <div class="extras__extra-price-wrap flex flex-column"><span class="extras__extra-price--price">$120</span><span class="extras__extra-price--pax-type">per Traveller</span></div>
                                                <div class="scout-element__select-wrapper">
                                                    <div class="scout-element__select" data-cy="bnp-extras--traveller-select">
                                                        <select id="" name="" class="scout-element__select-field extras__extra-price--select js-extras__extra-price--select" data-id="710" data-cy="bnp-extras--traveller-select-select">
                                                            <option value="0">0 Traveller</option>
                                                            <option value="1">1 Traveller</option>
                                                        </select>
                                                    </div>
                                                    <p class="js-scout-element__error scout-element__select--error hid" data-cy="bnp-extras--traveller-select-select-error"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="extras__extra-item flex flex-between js-extras__extra-item" data-id="208399">
                                        <div class="extras__extra-type">
                                            <div class="extras__extra-type-name">
                                                Old Cairo tour
                                            </div>
                                            <div class="extras__extra-type-description">
                                                Enjoy your half day tour of old Cairo tour, visit the Islamic and Coptic Cairo ( this activity is available just only if the clients will have pre or post accommodation)
                                            </div>
                                        </div>
                                        <div class="extras__extra-price-wrapper">
                                            <div class="extras__extra-price flex">
                                                <div class="extras__extra-price-wrap flex flex-column"><span class="extras__extra-price--price">$95</span><span class="extras__extra-price--pax-type">per Traveller</span></div>
                                                <div class="scout-element__select-wrapper">
                                                    <div class="scout-element__select" data-cy="bnp-extras--traveller-select">
                                                        <select id="" name="" class="scout-element__select-field extras__extra-price--select js-extras__extra-price--select" data-id="710" data-cy="bnp-extras--traveller-select-select">
                                                            <option value="0">0 Traveller</option>
                                                            <option value="1">1 Traveller</option>
                                                        </select>
                                                    </div>
                                                    <p class="js-scout-element__error scout-element__select--error hid" data-cy="bnp-extras--traveller-select-select-error"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="extras__extra-item flex flex-between js-extras__extra-item" data-id="208400">
                                        <div class="extras__extra-type">
                                            <div class="extras__extra-type-name">
                                                Alexandria day tour
                                            </div>
                                            <div class="extras__extra-type-description">
                                                Enjoy your full day tour to Alexandria, visit the Greek Roman catacombs / Qaitbay citadel / pompey's pillar. Seafood lunch explore the old site of Alexandria li
                                                <span class="js-extras__read-more--dots">... </span><span class="js-extras__read-more--link extras__read-more--link"><a class="extras__read-more--link-anchor" href="#">Read more</a></span>
                                                <span class="js-extras__read-more--text extras__read-more--text hid">
                                                    ght house. ( this activity is available for the clients who will arrive earlier before the trip starts or whom staying in Egypt after the end of the trip
                                                </span>
                                                <span class="js-extras__read-less--link extras__read-less--link hid"><a class="extras__read-more--link-anchor" href="#">Read less</a></span>
                                            </div>
                                        </div>
                                        <div class="extras__extra-price-wrapper">
                                            <div class="extras__extra-price flex">
                                                <div class="extras__extra-price-wrap flex flex-column"><span class="extras__extra-price--price">$160</span><span class="extras__extra-price--pax-type">per Traveller</span></div>
                                                <div class="scout-element__select-wrapper">
                                                    <div class="scout-element__select" data-cy="bnp-extras--traveller-select">
                                                        <select id="" name="" class="scout-element__select-field extras__extra-price--select js-extras__extra-price--select" data-id="710" data-cy="bnp-extras--traveller-select-select">
                                                            <option value="0">0 Traveller</option>
                                                            <option value="1">1 Traveller</option>
                                                        </select>
                                                    </div>
                                                    <p class="js-scout-element__error scout-element__select--error hid" data-cy="bnp-extras--traveller-select-select-error"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="extras__extra-item flex flex-between js-extras__extra-item" data-id="369621">
                                        <div class="extras__extra-type">
                                            <div class="extras__extra-type-name">
                                                Luxor city tour by horse carriage
                                            </div>
                                            <div class="extras__extra-type-description">
                                                Enjoy horse carriage ride around the local areas of luxor city , go through the local market and bazaars
                                            </div>
                                        </div>
                                        <div class="extras__extra-price-wrapper">
                                            <div class="extras__extra-price flex">
                                                <div class="extras__extra-price-wrap flex flex-column"><span class="extras__extra-price--price">$25</span><span class="extras__extra-price--pax-type">per Traveller</span></div>
                                                <div class="scout-element__select-wrapper">
                                                    <div class="scout-element__select" data-cy="bnp-extras--traveller-select">
                                                        <select id="" name="" class="scout-element__select-field extras__extra-price--select js-extras__extra-price--select" data-id="710" data-cy="bnp-extras--traveller-select-select">
                                                            <option value="0">0 Traveller</option>
                                                            <option value="1">1 Traveller</option>
                                                        </select>
                                                    </div>
                                                    <p class="js-scout-element__error scout-element__select--error hid" data-cy="bnp-extras--traveller-select-select-error"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="extras__extra-item flex flex-between js-extras__extra-item" data-id="369625">
                                        <div class="extras__extra-type">
                                            <div class="extras__extra-type-name">
                                                Pre accommodation in Cairo hotel
                                            </div>
                                            <div class="extras__extra-type-description">
                                                One night pre accommodation at the same hotel where the trip will start, it will include breakfast and the early arrival transfer from Cairo airport
                                            </div>
                                        </div>
                                        <div class="extras__extra-price-wrapper">
                                            <div class="extras__extra-price flex">
                                                <div class="extras__extra-price-wrap flex flex-column"><span class="extras__extra-price--price">$75</span><span class="extras__extra-price--pax-type">per Traveller</span></div>
                                                <div class="scout-element__select-wrapper">
                                                    <div class="scout-element__select" data-cy="bnp-extras--traveller-select">
                                                        <select id="" name="" class="scout-element__select-field extras__extra-price--select js-extras__extra-price--select" data-id="710" data-cy="bnp-extras--traveller-select-select">
                                                            <option value="0">0 Traveller</option>
                                                            <option value="1">1 Traveller</option>
                                                        </select>
                                                    </div>
                                                    <p class="js-scout-element__error scout-element__select--error hid" data-cy="bnp-extras--traveller-select-select-error"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="extras__extra-item flex flex-between js-extras__extra-item" data-id="369626">
                                        <div class="extras__extra-type">
                                            <div class="extras__extra-type-name">
                                                Post accommodation in Cairo hotel
                                            </div>
                                            <div class="extras__extra-type-description">
                                                One night post accommodation in hotel near to Cairo airport , this post accommodation will include breakfast and the departure transfer to Cairo airport
                                            </div>
                                        </div>
                                        <div class="extras__extra-price-wrapper">
                                            <div class="extras__extra-price flex">
                                                <div class="extras__extra-price-wrap flex flex-column"><span class="extras__extra-price--price">$75</span><span class="extras__extra-price--pax-type">per Traveller</span></div>
                                                <div class="scout-element__select-wrapper">
                                                    <div class="scout-element__select" data-cy="bnp-extras--traveller-select">
                                                        <select id="" name="" class="scout-element__select-field extras__extra-price--select js-extras__extra-price--select" data-id="710" data-cy="bnp-extras--traveller-select-select">
                                                            <option value="0">0 Traveller</option>
                                                            <option value="1">1 Traveller</option>
                                                        </select>
                                                    </div>
                                                    <p class="js-scout-element__error scout-element__select--error hid" data-cy="bnp-extras--traveller-select-select-error"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="extras__extra-item flex flex-between js-extras__extra-item" data-id="388693">
                                        <div class="extras__extra-type">
                                            <div class="extras__extra-type-name">
                                                Pyramids sound and light show with dinner and panoramic view of Pyramids
                                            </div>
                                            <div class="extras__extra-type-description">
                                                Enjoy your dinner by sunset time front of the Pyramids and sphinx then watching the sound and light show of the Pyramids
                                            </div>
                                        </div>
                                        <div class="extras__extra-price-wrapper">
                                            <div class="extras__extra-price flex">
                                                <div class="extras__extra-price-wrap flex flex-column"><span class="extras__extra-price--price">$99</span><span class="extras__extra-price--pax-type">per Traveller</span></div>
                                                <div class="scout-element__select-wrapper">
                                                    <div class="scout-element__select" data-cy="bnp-extras--traveller-select">
                                                        <select id="" name="" class="scout-element__select-field extras__extra-price--select js-extras__extra-price--select" data-id="710" data-cy="bnp-extras--traveller-select-select">
                                                            <option value="0">0 Traveller</option>
                                                            <option value="1">1 Traveller</option>
                                                        </select>
                                                    </div>
                                                    <p class="js-scout-element__error scout-element__select--error hid" data-cy="bnp-extras--traveller-select-select-error"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="extras__extra-item flex flex-between js-extras__extra-item" data-id="436162">
                                        <div class="extras__extra-type">
                                            <div class="extras__extra-type-name">
                                                Karnak sound and light show
                                            </div>
                                            <div class="extras__extra-type-description">
                                                The show narrates the achievements and the events of the great kings of ancient Egypt with poetic description of the ancient temples.
                                            </div>
                                        </div>
                                        <div class="extras__extra-price-wrapper">
                                            <div class="extras__extra-price flex">
                                                <div class="extras__extra-price-wrap flex flex-column"><span class="extras__extra-price--price">$50</span><span class="extras__extra-price--pax-type">per Traveller</span></div>
                                                <div class="scout-element__select-wrapper">
                                                    <div class="scout-element__select" data-cy="bnp-extras--traveller-select">
                                                        <select id="" name="" class="scout-element__select-field extras__extra-price--select js-extras__extra-price--select" data-id="710" data-cy="bnp-extras--traveller-select-select">
                                                            <option value="0">0 Traveller</option>
                                                            <option value="1">1 Traveller</option>
                                                        </select>
                                                    </div>
                                                    <p class="js-scout-element__error scout-element__select--error hid" data-cy="bnp-extras--traveller-select-select-error"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="extras__extra-item flex flex-between js-extras__extra-item" data-id="479211">
                                        <div class="extras__extra-type">
                                            <div class="extras__extra-type-name">
                                                Private holiday
                                            </div>
                                            <div class="extras__extra-type-description">
                                                Private holiday option is the best way for those looking to get out and do all the activities privately, It will provide you with own personal expert tour guid
                                                <span class="js-extras__read-more--dots">... </span><span class="js-extras__read-more--link extras__read-more--link"><a class="extras__read-more--link-anchor" href="#">Read more</a></span>
                                                <span class="js-extras__read-more--text extras__read-more--text hid">e and personal driver with one of our deluxe air-conditioned vehicle</span>
                                                <span class="js-extras__read-less--link extras__read-less--link hid"><a class="extras__read-more--link-anchor" href="#">Read less</a></span>
                                            </div>
                                        </div>
                                        <div class="extras__extra-price-wrapper">
                                            <div class="extras__extra-price flex">
                                                <div class="extras__extra-price-wrap flex flex-column"><span class="extras__extra-price--price">$355</span><span class="extras__extra-price--pax-type">per Traveller</span></div>
                                                <div class="scout-element__select-wrapper">
                                                    <div class="scout-element__select" data-cy="bnp-extras--traveller-select">
                                                        <select id="" name="" class="scout-element__select-field extras__extra-price--select js-extras__extra-price--select" data-id="710" data-cy="bnp-extras--traveller-select-select">
                                                            <option value="0">0 Traveller</option>
                                                            <option value="1">1 Traveller</option>
                                                        </select>
                                                    </div>
                                                    <p class="js-scout-element__error scout-element__select--error hid" data-cy="bnp-extras--traveller-select-select-error"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="extras__extra-item flex flex-between js-extras__extra-item" data-id="494282">
                                        <div class="extras__extra-type">
                                            <div class="extras__extra-type-name">
                                                Nile cruise royal suite upgrade
                                            </div>
                                            <div class="extras__extra-type-description">
                                                Enjoy your accommodation for 4nights on luxurious royal suite with wonderful Nile view
                                            </div>
                                        </div>
                                        <div class="extras__extra-price-wrapper">
                                            <div class="extras__extra-price flex">
                                                <div class="extras__extra-price-wrap flex flex-column"><span class="extras__extra-price--price">$475</span><span class="extras__extra-price--pax-type">per Traveller</span></div>
                                                <div class="scout-element__select-wrapper">
                                                    <div class="scout-element__select" data-cy="bnp-extras--traveller-select">
                                                        <select id="" name="" class="scout-element__select-field extras__extra-price--select js-extras__extra-price--select" data-id="710" data-cy="bnp-extras--traveller-select-select">
                                                            <option value="0">0 Traveller</option>
                                                            <option value="1">1 Traveller</option>
                                                        </select>
                                                    </div>
                                                    <p class="js-scout-element__error scout-element__select--error hid" data-cy="bnp-extras--traveller-select-select-error"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="block card traveller-details form-block details" data-block-type="Traveller Details">
                        <div class="head flex flex-center">
                            <div class="point">4</div>
                            <h3>Add traveller details</h3>
                        </div>
                        <form>
                            <div class="additional traveller" data-traveller-number="1">
                                <div class="fields">
                                    <div class="traveller-details__fields-title">
                                        <h5 class="aa-heading-h5">Lead Traveller</h5>
                                        <div class="traveller-details__fields-description">This traveller will serve as the contact person for the booking.</div>
                                    </div>
                                    <section>
                                        <div class="traveller-details__fields-subgroup traveller-details__fields-subgroup--g1">
                                            <div class="traveller-details__fields-input row" data-seo="first-name" data-id="2" data-error-empty="Please enter your first name" data-error-wrong="Please enter your first name" data-required="1">
                                                <div class="scout-element__input-wrapper">
                                                    <div class="scout-element__input validity-con cell" data-type="string" data-cy="bnp-traveller-details--main-first-name" data-error="Please enter your first name">
                                                        <label for="t2-1" class="scout-element__input-label" data-cy="bnp-traveller-details--main-first-name-label">First Name*</label>
                                                        <input
                                                            id="t2-1"
                                                            class="scout-element__input-field"
                                                            placeholder=""
                                                            name="field2[]"
                                                            type="text"
                                                            autocomplete="section-1 given-name"
                                                            value=""
                                                            data-cy="bnp-traveller-details--main-first-name-input"
                                                        />
                                                    </div>
                                                    <p class="js-scout-element__error scout-element__input--error hid" data-cy="bnp-traveller-details--main-first-name-input-error"></p>
                                                </div>
                                            </div>
                                            <div class="traveller-details__fields-input row" data-seo="last-name" data-id="4" data-error-empty="Please enter your last name" data-error-wrong="Please enter your last name" data-required="1">
                                                <div class="scout-element__input-wrapper">
                                                    <div class="scout-element__input validity-con cell" data-type="string" data-cy="bnp-traveller-details--main-last-name" data-error="Please enter your last name">
                                                        <label for="t4-1" class="scout-element__input-label" data-cy="bnp-traveller-details--main-last-name-label">Last Name*</label>
                                                        <input
                                                            id="t4-1"
                                                            class="scout-element__input-field"
                                                            placeholder=""
                                                            name="field4[]"
                                                            type="text"
                                                            autocomplete="section-1 family-name"
                                                            value=""
                                                            data-cy="bnp-traveller-details--main-last-name-input"
                                                        />
                                                    </div>
                                                    <p class="js-scout-element__error scout-element__input--error hid" data-cy="bnp-traveller-details--main-last-name-input-error"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="traveller-details__fields-subgroup traveller-details__fields-subgroup--g2">
                                            <div
                                                class="traveller-details__fields-input row"
                                                data-seo="email"
                                                data-id="5"
                                                data-error-empty="Please enter a valid email address"
                                                data-error-wrong="Please enter a valid email address"
                                                data-required="1"
                                            >
                                                <div class="scout-element__input-wrapper">
                                                    <div class="scout-element__input validity-con cell" data-type="email" data-cy="bnp-traveller-details--main-email" data-error="Please enter a valid email address">
                                                        <label for="t5-1" class="scout-element__input-label" data-cy="bnp-traveller-details--main-email-label">Email*</label>
                                                        <input id="t5-1" class="scout-element__input-field" placeholder="" name="field5[]" type="email" autocomplete="section-1 email" value="" data-cy="bnp-traveller-details--main-email-input" />
                                                    </div>
                                                    <p class="js-scout-element__error scout-element__input--error hid" data-cy="bnp-traveller-details--main-email-input-error"></p>
                                                </div>
                                            </div>
                                            <div
                                                class="traveller-details__fields-input row"
                                                data-seo="phone-number"
                                                data-id="6"
                                                data-error-empty="Please enter your full number"
                                                data-error-wrong="Please enter your full number"
                                                data-required="1"
                                            >
                                                <div class="scout-element__input-wrapper">
                                                    <div class="scout-element__input validity-con cell" data-type="phone" data-cy="bnp-traveller-details--main-phone" data-error="Please enter your full number">
                                                        <label for="t6-1" class="scout-element__input-label" data-cy="bnp-traveller-details--main-phone-label">Phone Number*</label>
                                                        <input
                                                            id="t6-1"
                                                            class="scout-element__input-field"
                                                            placeholder="e.g. +92 1234 567890"
                                                            name="field6-tel"
                                                            type="tel"
                                                            autocomplete="section-1 tel"
                                                            value=""
                                                            data-cy="bnp-traveller-details--main-phone-input"
                                                        />
                                                    </div>
                                                    <p class="js-scout-element__error scout-element__input--error hid" data-cy="bnp-traveller-details--main-phone-input-error"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="traveller-details__fields-subgroup traveller-details__fields-subgroup--g3">
                                            <div
                                                class="traveller-details__fields-input row traveller-details__fields-input--full-width"
                                                data-seo="date-of-birth"
                                                data-id="7"
                                                data-error-empty="Please enter your date of birth"
                                                data-error-wrong="Please enter your date of birth"
                                                data-required="1"
                                            >
                                                <div class="scout-element__date-select-wrapper traveller-details__fields-birthdate" data-cy="bnp-traveller-details--main-birthdate">
                                                    <label class="scout-element__date-select-title">Date of Birth*</label>
                                                    <div class="scout-element__date-select-container validity-con input-grp" data-type="date" data-direction="past" data-error="Please enter your date of birth">
                                                        <div class="js-scout-element__date-select scout-element__date-select">
                                                            <label class="scout-element__date-select-label">Day</label>
                                                            <select name="field7-day" class="scout-element__date-select-field" id="t7-1" data-cy="bnp-traveller-details--main-birthdate-day">
                                                                <option selected="" disabled="" value=""></option>
                                                                s
                                                                <option value="1">1</option>
                                                                s
                                                                <option value="2">2</option>
                                                                s
                                                                <option value="3">3</option>
                                                                s
                                                                <option value="4">4</option>
                                                                s
                                                                <option value="5">5</option>
                                                                s
                                                                <option value="6">6</option>
                                                                s
                                                                <option value="7">7</option>
                                                                s
                                                                <option value="8">8</option>
                                                                s
                                                                <option value="9">9</option>
                                                                s
                                                                <option value="10">10</option>
                                                                s
                                                                <option value="11">11</option>
                                                                s
                                                                <option value="12">12</option>
                                                                s
                                                                <option value="13">13</option>
                                                                s
                                                                <option value="14">14</option>
                                                                s
                                                                <option value="15">15</option>
                                                                s
                                                                <option value="16">16</option>
                                                                s
                                                                <option value="17">17</option>
                                                                s
                                                                <option value="18">18</option>
                                                                s
                                                                <option value="19">19</option>
                                                                s
                                                                <option value="20">20</option>
                                                                s
                                                                <option value="21">21</option>
                                                                s
                                                                <option value="22">22</option>
                                                                s
                                                                <option value="23">23</option>
                                                                s
                                                                <option value="24">24</option>
                                                                s
                                                                <option value="25">25</option>
                                                                s
                                                                <option value="26">26</option>
                                                                s
                                                                <option value="27">27</option>
                                                                s
                                                                <option value="28">28</option>
                                                                s
                                                                <option value="29">29</option>
                                                                s
                                                                <option value="30">30</option>
                                                                s
                                                                <option value="31">31</option>
                                                            </select>
                                                        </div>
                                                        <div class="js-scout-element__date-select scout-element__date-select">
                                                            <label class="scout-element__date-select-label">Month</label>
                                                            <select name="field7-month" class="scout-element__date-select-field" id="t7-1-month" data-cy="bnp-traveller-details--main-birthdate-month" s="">
                                                                <option selected="" disabled="" value=""></option>
                                                                <option value="1">January</option>
                                                                <option value="2">February</option>
                                                                <option value="3">March</option>
                                                                <option value="4">April</option>
                                                                <option value="5">May</option>
                                                                <option value="6">June</option>
                                                                <option value="7">July</option>
                                                                <option value="8">August</option>
                                                                <option value="9">September</option>
                                                                <option value="10">October</option>
                                                                <option value="11">November</option>
                                                                <option value="12">December</option>
                                                            </select>
                                                        </div>
                                                        <div class="js-scout-element__date-select scout-element__date-select">
                                                            <label class="scout-element__date-select-label">Year</label>
                                                            <select name="field7-year" class="scout-element__date-select-field" id="t7-1-year" data-cy="bnp-traveller-details--main-birthdate-year">
                                                                <option selected="" disabled="" value=""></option>
                                                                <option value="2022">2022</option>
                                                                <option value="2021">2021</option>
                                                                <option value="2020">2020</option>
                                                                <option value="2019">2019</option>
                                                                <option value="2018">2018</option>
                                                                <option value="2017">2017</option>
                                                                <option value="2016">2016</option>
                                                                <option value="2015">2015</option>
                                                                <option value="2014">2014</option>
                                                                <option value="2013">2013</option>
                                                                <option value="2012">2012</option>
                                                                <option value="2011">2011</option>
                                                                <option value="2010">2010</option>
                                                                <option value="2009">2009</option>
                                                                <option value="2008">2008</option>
                                                                <option value="2007">2007</option>
                                                                <option value="2006">2006</option>
                                                                <option value="2005">2005</option>
                                                                <option value="2004">2004</option>
                                                                <option value="2003">2003</option>
                                                                <option value="2002">2002</option>
                                                                <option value="2001">2001</option>
                                                                <option value="2000">2000</option>
                                                                <option value="1999">1999</option>
                                                                <option value="1998">1998</option>
                                                                <option value="1997">1997</option>
                                                                <option value="1996">1996</option>
                                                                <option value="1995">1995</option>
                                                                <option value="1994">1994</option>
                                                                <option value="1993">1993</option>
                                                                <option value="1992">1992</option>
                                                                <option value="1991">1991</option>
                                                                <option value="1990">1990</option>
                                                                <option value="1989">1989</option>
                                                                <option value="1988">1988</option>
                                                                <option value="1987">1987</option>
                                                                <option value="1986">1986</option>
                                                                <option value="1985">1985</option>
                                                                <option value="1984">1984</option>
                                                                <option value="1983">1983</option>
                                                                <option value="1982">1982</option>
                                                                <option value="1981">1981</option>
                                                                <option value="1980">1980</option>
                                                                <option value="1979">1979</option>
                                                                <option value="1978">1978</option>
                                                                <option value="1977">1977</option>
                                                                <option value="1976">1976</option>
                                                                <option value="1975">1975</option>
                                                                <option value="1974">1974</option>
                                                                <option value="1973">1973</option>
                                                                <option value="1972">1972</option>
                                                                <option value="1971">1971</option>
                                                                <option value="1970">1970</option>
                                                                <option value="1969">1969</option>
                                                                <option value="1968">1968</option>
                                                                <option value="1967">1967</option>
                                                                <option value="1966">1966</option>
                                                                <option value="1965">1965</option>
                                                                <option value="1964">1964</option>
                                                                <option value="1963">1963</option>
                                                                <option value="1962">1962</option>
                                                                <option value="1961">1961</option>
                                                                <option value="1960">1960</option>
                                                                <option value="1959">1959</option>
                                                                <option value="1958">1958</option>
                                                                <option value="1957">1957</option>
                                                                <option value="1956">1956</option>
                                                                <option value="1955">1955</option>
                                                                <option value="1954">1954</option>
                                                                <option value="1953">1953</option>
                                                                <option value="1952">1952</option>
                                                                <option value="1951">1951</option>
                                                                <option value="1950">1950</option>
                                                                <option value="1949">1949</option>
                                                                <option value="1948">1948</option>
                                                                <option value="1947">1947</option>
                                                                <option value="1946">1946</option>
                                                                <option value="1945">1945</option>
                                                                <option value="1944">1944</option>
                                                                <option value="1943">1943</option>
                                                                <option value="1942">1942</option>
                                                                <option value="1941">1941</option>
                                                                <option value="1940">1940</option>
                                                                <option value="1939">1939</option>
                                                                <option value="1938">1938</option>
                                                                <option value="1937">1937</option>
                                                                <option value="1936">1936</option>
                                                                <option value="1935">1935</option>
                                                                <option value="1934">1934</option>
                                                                <option value="1933">1933</option>
                                                                <option value="1932">1932</option>
                                                                <option value="1931">1931</option>
                                                                <option value="1930">1930</option>
                                                                <option value="1929">1929</option>
                                                                <option value="1928">1928</option>
                                                                <option value="1927">1927</option>
                                                                <option value="1926">1926</option>
                                                                <option value="1925">1925</option>
                                                                <option value="1924">1924</option>
                                                                <option value="1923">1923</option>
                                                                <option value="1922">1922</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <p class="js-scout-element__error scout-element__select--error hid"></p>
                                                </div>
                                                <div class="js-traveller-details__suitable traveller-details__info cell hid" data-min="1" data-max="90" data-ga-label="Outside Age Range" data-cy="bnp-traveller-details--suitable-msg">
                                                    This tour is suitable for 1 to 90 years old Not within the age range? <a href="#" class="js-traveller-details__contact-agent-link">Contact an agent now.</a>
                                                </div>
                                            </div>
                                            <div
                                                class="traveller-details__fields-input row traveller-details__fields-input--full-width"
                                                data-seo="gender"
                                                data-id="26"
                                                data-error-empty="Please select your gender"
                                                data-error-wrong="Please select your gender"
                                                data-required="1"
                                            >
                                                <div class="traveller-details__fields-radio flex flex-wrap flex-center">
                                                    <h6 class="traveller-details__fields-radio-title">Gender*</h6>
                                                    <div class="scout-element__radio validity-con" data-type="radio" data-cy="bnp-traveller-details--main-male-radio" data-error="Please select your gender">
                                                        <label for="26-1-1" class="scout-element__radio-label">
                                                            <input id="26-1-1" class="scout-element__radio-hidden" placeholder="" name="field26-1[]" type="radio" value="male" data-cy="bnp-traveller-details--main-male-radio-input" />
                                                            <span class="scout-element__radio-field"></span>
                                                            Male
                                                        </label>
                                                        <p class="js-scout-element__error scout-element__radio--error hid" data-cy="bnp-traveller-details--main-male-radio-input-error"></p>
                                                    </div>
                                                    <div class="scout-element__radio validity-con" data-type="radio" data-cy="bnp-traveller-details--main-female-radio" data-error="Please select your gender">
                                                        <label for="26-1-2" class="scout-element__radio-label">
                                                            <input id="26-1-2" class="scout-element__radio-hidden" placeholder="" name="field26-1[]" type="radio" value="female" data-cy="bnp-traveller-details--main-female-radio-input" />
                                                            <span class="scout-element__radio-field"></span>
                                                            Female
                                                        </label>
                                                        <p class="js-scout-element__error scout-element__radio--error hid" data-cy="bnp-traveller-details--main-female-radio-input-error"></p>
                                                    </div>
                                                    <p class="js-scout-element__error traveller-details__fields-radio--error flex hid"></p>
                                                </div>
                                            </div>
                                            <div class="traveller-details__fields-input row" data-seo="nationality" data-id="15" data-error-empty="Select your nationality" data-error-wrong="Select your nationality" data-required="1">
                                                <div class="scout-element__select-wrapper">
                                                    <div class="scout-element__select validity-con cell" data-type="country" data-cy="bnp-traveller-details--main-country" data-error="Select your nationality">
                                                        <label for="t15-1" class="scout-element__select-label" data-cy="bnp-traveller-details--main-country-label">Nationality*</label>
                                                        <select id="t15-1" name="field15[]" class="scout-element__select-field" required="" data-cy="bnp-traveller-details--main-country-select">
                                                            <option selected="" disabled="" value="">Select your nationality</option>
                                                            <option value="Australia">Australia</option>
                                                            <option value="Canada">Canada</option>
                                                            <option value="New Zealand">New Zealand</option>
                                                            <option value="USA">USA</option>
                                                            <option value="United Kingdom">United Kingdom</option>
                                                            <option disabled="">────────────────────────</option>
                                                            <option value="Afghanistan">Afghanistan</option>
                                                            <option value="Albania">Albania</option>
                                                            <option value="Algeria">Algeria</option>
                                                            <option value="American Samoa">American Samoa</option>
                                                            <option value="Andorra">Andorra</option>
                                                            <option value="Angola">Angola</option>
                                                            <option value="Anguilla">Anguilla</option>
                                                            <option value="Antarctica">Antarctica</option>
                                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                            <option value="Argentina">Argentina</option>
                                                            <option value="Armenia">Armenia</option>
                                                            <option value="Aruba">Aruba</option>
                                                            <option value="Austria">Austria</option>
                                                            <option value="Azerbaijan">Azerbaijan</option>
                                                            <option value="Bahamas">Bahamas</option>
                                                            <option value="Bahrain">Bahrain</option>
                                                            <option value="Bangladesh">Bangladesh</option>
                                                            <option value="Barbados">Barbados</option>
                                                            <option value="Belarus">Belarus</option>
                                                            <option value="Belgium">Belgium</option>
                                                            <option value="Belize">Belize</option>
                                                            <option value="Benin">Benin</option>
                                                            <option value="Bermuda">Bermuda</option>
                                                            <option value="Bhutan">Bhutan</option>
                                                            <option value="Bolivia">Bolivia</option>
                                                            <option value="Bora Bora">Bora Bora</option>
                                                            <option value="Borneo">Borneo</option>
                                                            <option value="Bosnia">Bosnia</option>
                                                            <option value="Botswana">Botswana</option>
                                                            <option value="Brazil">Brazil</option>
                                                            <option value="Brunei">Brunei</option>
                                                            <option value="Bulgaria">Bulgaria</option>
                                                            <option value="Burkina Faso">Burkina Faso</option>
                                                            <option value="Burundi">Burundi</option>
                                                            <option value="Cambodia">Cambodia</option>
                                                            <option value="Cameroon">Cameroon</option>
                                                            <option value="Cape Verde">Cape Verde</option>
                                                            <option value="Cayman Islands">Cayman Islands</option>
                                                            <option value="Central African Republic">Central African Republic</option>
                                                            <option value="Chad">Chad</option>
                                                            <option value="Chile">Chile</option>
                                                            <option value="China">China</option>
                                                            <option value="Colombia">Colombia</option>
                                                            <option value="Comoros">Comoros</option>
                                                            <option value="Congo">Congo</option>
                                                            <option value="Cook Islands">Cook Islands</option>
                                                            <option value="Costa Rica">Costa Rica</option>
                                                            <option value="Croatia">Croatia</option>
                                                            <option value="Cuba">Cuba</option>
                                                            <option value="Curaçao">Curaçao</option>
                                                            <option value="Cyprus">Cyprus</option>
                                                            <option value="Czech Republic">Czech Republic</option>
                                                            <option value="DR of Congo">DR of Congo</option>
                                                            <option value="Denmark">Denmark</option>
                                                            <option value="Djibouti">Djibouti</option>
                                                            <option value="Dominica">Dominica</option>
                                                            <option value="Dominican Republic">Dominican Republic</option>
                                                            <option value="East Timor">East Timor</option>
                                                            <option value="Ecuador">Ecuador</option>
                                                            <option value="Egypt">Egypt</option>
                                                            <option value="El Salvador">El Salvador</option>
                                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                            <option value="Eritrea">Eritrea</option>
                                                            <option value="Estonia">Estonia</option>
                                                            <option value="Ethiopia">Ethiopia</option>
                                                            <option value="Falkland Islands">Falkland Islands</option>
                                                            <option value="Faroe Islands">Faroe Islands</option>
                                                            <option value="Fiji">Fiji</option>
                                                            <option value="Finland">Finland</option>
                                                            <option value="France">France</option>
                                                            <option value="French Polynesia">French Polynesia</option>
                                                            <option value="Gabon">Gabon</option>
                                                            <option value="Gambia">Gambia</option>
                                                            <option value="Georgia">Georgia</option>
                                                            <option value="Germany">Germany</option>
                                                            <option value="Ghana">Ghana</option>
                                                            <option value="Gibraltar">Gibraltar</option>
                                                            <option value="Greece">Greece</option>
                                                            <option value="Greenland">Greenland</option>
                                                            <option value="Grenada">Grenada</option>
                                                            <option value="Guadeloupe">Guadeloupe</option>
                                                            <option value="Guam">Guam</option>
                                                            <option value="Guatemala">Guatemala</option>
                                                            <option value="Guernsey">Guernsey</option>
                                                            <option value="Guinea">Guinea</option>
                                                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                            <option value="Guyana">Guyana</option>
                                                            <option value="Haiti">Haiti</option>
                                                            <option value="Honduras">Honduras</option>
                                                            <option value="Hong Kong">Hong Kong</option>
                                                            <option value="Hungary">Hungary</option>
                                                            <option value="Iceland">Iceland</option>
                                                            <option value="India">India</option>
                                                            <option value="Indonesia">Indonesia</option>
                                                            <option value="Iran">Iran</option>
                                                            <option value="Iraq">Iraq</option>
                                                            <option value="Ireland">Ireland</option>
                                                            <option value="Isle of Man">Isle of Man</option>
                                                            <option value="Israel">Israel</option>
                                                            <option value="Italy">Italy</option>
                                                            <option value="Ivory Coast">Ivory Coast</option>
                                                            <option value="Jamaica">Jamaica</option>
                                                            <option value="Japan">Japan</option>
                                                            <option value="Jersey">Jersey</option>
                                                            <option value="Jordan">Jordan</option>
                                                            <option value="Kazakhstan">Kazakhstan</option>
                                                            <option value="Kenya">Kenya</option>
                                                            <option value="Kosovo">Kosovo</option>
                                                            <option value="Kuwait">Kuwait</option>
                                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                            <option value="Laos">Laos</option>
                                                            <option value="Latvia">Latvia</option>
                                                            <option value="Lebanon">Lebanon</option>
                                                            <option value="Lesotho">Lesotho</option>
                                                            <option value="Liberia">Liberia</option>
                                                            <option value="Libya">Libya</option>
                                                            <option value="Liechtenstein">Liechtenstein</option>
                                                            <option value="Lithuania">Lithuania</option>
                                                            <option value="Luxembourg">Luxembourg</option>
                                                            <option value="Macau">Macau</option>
                                                            <option value="Macedonia">Macedonia</option>
                                                            <option value="Madagascar">Madagascar</option>
                                                            <option value="Malawi">Malawi</option>
                                                            <option value="Malaysia">Malaysia</option>
                                                            <option value="Maldives">Maldives</option>
                                                            <option value="Mali">Mali</option>
                                                            <option value="Malta">Malta</option>
                                                            <option value="Martinique">Martinique</option>
                                                            <option value="Mauritania">Mauritania</option>
                                                            <option value="Mauritius">Mauritius</option>
                                                            <option value="Mexico">Mexico</option>
                                                            <option value="Micronesia">Micronesia</option>
                                                            <option value="Moldova">Moldova</option>
                                                            <option value="Monaco">Monaco</option>
                                                            <option value="Mongolia">Mongolia</option>
                                                            <option value="Montenegro">Montenegro</option>
                                                            <option value="Montserrat">Montserrat</option>
                                                            <option value="Morocco">Morocco</option>
                                                            <option value="Mozambique">Mozambique</option>
                                                            <option value="Myanmar (Burma)">Myanmar (Burma)</option>
                                                            <option value="Namibia">Namibia</option>
                                                            <option value="Nauru">Nauru</option>
                                                            <option value="Nepal">Nepal</option>
                                                            <option value="Netherlands">Netherlands</option>
                                                            <option value="New Caledonia">New Caledonia</option>
                                                            <option value="Nicaragua">Nicaragua</option>
                                                            <option value="Niger">Niger</option>
                                                            <option value="Nigeria">Nigeria</option>
                                                            <option value="North Korea">North Korea</option>
                                                            <option value="Northern Ireland">Northern Ireland</option>
                                                            <option value="Norway">Norway</option>
                                                            <option value="Oman">Oman</option>
                                                            <option value="Pakistan">Pakistan</option>
                                                            <option value="Palestinian Territory">Palestinian Territory</option>
                                                            <option value="Panama">Panama</option>
                                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                                            <option value="Paraguay">Paraguay</option>
                                                            <option value="Peru">Peru</option>
                                                            <option value="Philippines">Philippines</option>
                                                            <option value="Poland">Poland</option>
                                                            <option value="Portugal">Portugal</option>
                                                            <option value="Puerto Rico">Puerto Rico</option>
                                                            <option value="Qatar">Qatar</option>
                                                            <option value="Reunion">Reunion</option>
                                                            <option value="Romania">Romania</option>
                                                            <option value="Russia">Russia</option>
                                                            <option value="Rwanda">Rwanda</option>
                                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                            <option value="Saint Lucia">Saint Lucia</option>
                                                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                            <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                            <option value="Samoa">Samoa</option>
                                                            <option value="San Marino">San Marino</option>
                                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                                            <option value="Scotland">Scotland</option>
                                                            <option value="Senegal">Senegal</option>
                                                            <option value="Serbia">Serbia</option>
                                                            <option value="Seychelles">Seychelles</option>
                                                            <option value="Sierra Leone">Sierra Leone</option>
                                                            <option value="Singapore">Singapore</option>
                                                            <option value="Slovakia">Slovakia</option>
                                                            <option value="Slovenia">Slovenia</option>
                                                            <option value="Solomon Islands">Solomon Islands</option>
                                                            <option value="Somalia">Somalia</option>
                                                            <option value="South Africa">South Africa</option>
                                                            <option value="South Korea">South Korea</option>
                                                            <option value="Spain">Spain</option>
                                                            <option value="Sri Lanka">Sri Lanka</option>
                                                            <option value="St Martin">St Martin</option>
                                                            <option value="Sudan">Sudan</option>
                                                            <option value="Suriname">Suriname</option>
                                                            <option value="Svalbard">Svalbard</option>
                                                            <option value="Swaziland">Swaziland</option>
                                                            <option value="Sweden">Sweden</option>
                                                            <option value="Switzerland">Switzerland</option>
                                                            <option value="Syria">Syria</option>
                                                            <option value="Taiwan">Taiwan</option>
                                                            <option value="Tajikistan">Tajikistan</option>
                                                            <option value="Tanzania">Tanzania</option>
                                                            <option value="Thailand">Thailand</option>
                                                            <option value="Togo">Togo</option>
                                                            <option value="Tonga">Tonga</option>
                                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                            <option value="Tunisia">Tunisia</option>
                                                            <option value="Turkey">Turkey</option>
                                                            <option value="Turkmenistan">Turkmenistan</option>
                                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                            <option value="Uganda">Uganda</option>
                                                            <option value="Ukraine">Ukraine</option>
                                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                                            <option value="Uruguay">Uruguay</option>
                                                            <option value="Uzbekistan">Uzbekistan</option>
                                                            <option value="Vanuatu">Vanuatu</option>
                                                            <option value="Vatican City (Holy See)">Vatican City (Holy See)</option>
                                                            <option value="Venezuela">Venezuela</option>
                                                            <option value="Vietnam">Vietnam</option>
                                                            <option value="Virgin Island, British">Virgin Island, British</option>
                                                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                            <option value="Wales">Wales</option>
                                                            <option value="Western Sahara">Western Sahara</option>
                                                            <option value="Yemen">Yemen</option>
                                                            <option value="Zambia">Zambia</option>
                                                            <option value="Zimbabwe">Zimbabwe</option>
                                                        </select>
                                                    </div>
                                                    <p class="js-scout-element__error scout-element__select--error hid" data-cy="bnp-traveller-details--main-country-select-error"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="js-ao-common-travel-agent-popup__overlay ao-common-travel-agent-popup hid">
                                <div id="_travel-agent-modal" class="scout-component__modal">
                                    <div class="js-scout-component__modal-dialog scout-component__modal-dialog">
                                        <div class="scout-component__modal-top">
                                            <div class="scout-component__modal-navigation">
                                                <div class="js-ao-common-travel-agent-popup__back scout-component__modal-navigation-back hid"></div>
                                                <button title="Close (Esc)" type="button" class="mfp-close scout-component__modal-navigation-close js-ao-common-travel-agent-popup__close"></button>
                                            </div>
                                            <h3 class="scout-component__modal-heading js-ao-common-travel-agent-popup__heading ao-common-travel-agent-popup__heading">Book as a travel agent?</h3>
                                        </div>
                                        <div class="scout-component__modal-content ao-common-travel-agent-popup__content">
                                            <p class="ao-common-travel-agent-popup__content">
                                                We see that the email address <span class="ao-common-travel-agent-popup__email"></span> is associated with a travel agent account. Do you want to make this booking as a travel agent?
                                            </p>
                                        </div>
                                        <div class="scout-component__modal-bottom ao-common-travel-agent-popup__flex-end">
                                            <button class="aa-btn aa-btn--secondary aa-btn--lg js-ao-common-travel-agent-popup__cancel ao-common-travel-agent-popup__cancel aa-btn--block" type="button">
                                                No
                                            </button>
                                            <a
                                                class="aa-btn aa-btn--primary aa-btn--lg js-ao-common-travel-agent-popup__cta ao-common-travel-agent-popup__cta aa-btn--block"
                                                href="https://dashboard.api.b2b.tourradar.com/signin?redirect_uri=https%3A%2F%2Fwww.tourradar.com%2Fbook-now%2F111022%3Fdate%3D07.01.2023%26type%3Dbook"
                                            >
                                                Yes
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="js-book-now-travel-insurance js-form-block travelInsurance" data-pax="1" data-tour-length="8" data-tour-length-type="d" data-tour-start-city-id="9605" data-tour-start="2023-01-07" data-cy="bnp-insurance"></div>
                    <div class="block card form-block tr-savings js-form-block desktopSavings" data-block-type="Savings">
                        <div class="head">
                            <div class="point">5</div>
                            <h3>TourRadar Savings</h3>
                        </div>
                        <ul class="tr-savings__list" data-value="none">
                            <li class="link tr-savings__redeem-link"><a href="#" data-cy="bnp-tr-savings--redeem-link"> Redeem Promo Code </a></li>
                            <li class="list text hid">
                                Select one option to start saving on your tour:
                            </li>
                            <li class="list current hid" data-value="" data-promocode="">
                                <div class="radio radio-surface">
                                    <label class="radio-surface__clickable flex flex-center flex-wrap" for="savings-code">
                                        <input class="radio-surface__hidden" type="radio" name="savings" value="promoCode" id="savings-code" data-cy="bnp-tr-savings--promo-checkbox" />
                                        <div class="check"></div>
                                        <div>Promo Code</div>
                                    </label>
                                    <div class="field flex flex-wrap">
                                        <div class="scout-element__input-wrapper tr-savings__input-wrapper">
                                            <div class="scout-element__input" data-cy="bnp-tr-savings--promo-input">
                                                <label for="" class="scout-element__input-label" data-cy="bnp-tr-savings--promo-input-label">Code:</label>
                                                <input id="" class="scout-element__input-field" placeholder="e.g: TKBTLA" name="" type="text" value="" data-cy="bnp-tr-savings--promo-input-input" />
                                            </div>
                                            <p class="js-scout-element__error scout-element__input--error hid" data-cy="bnp-tr-savings--promo-input-input-error"></p>
                                        </div>
                                        <a href="#" class="but blue" data-cy="bnp-tr-savings--promo-cta">Apply</a>
                                        <div class="error hid"></div>
                                    </div>
                                </div>
                                <div class="remove-savings"><a href="#" class="no" data-cy="bnp-tr-savings--remove">Remove saving</a></div>
                            </li>
                        </ul>
                    </div>
                    <div class="block card form-block book-now-flexible-option js-skip-form-saving js-book-now-flexible-option hid" data-block-type="Book with Flexibility"></div>
                    <div class="block card form-block book-now-pay-by-installments js-form-block payByInstallments js-book-now-pay-by-installments hid" data-block-type="Pay by installments"></div>
                    <div class="block card help-block flex">
                        <div class="icon-help"></div>
                        <div class="help-text">
                            <h3>Got a question? Check out our Q&amp;As</h3>
                            <div class="text">Or reach out to our award-winning travel experts.</div>
                        </div>
                        <button class="but blue outline help js-help__button" data-action="Help in Support Block BNP 2.0">
                            View Q&amp;As
                        </button>
                    </div>
                    <div class="block card form-block payment js-skip-form-saving" data-block-type="Payment">
                        <div class="head flex flex-center">
                            <div class="point">6</div>
                            <h3>Add payment details</h3>
                            <div class="logos"></div>
                        </div>
                        <div class="payment-fields">
                            <div class="methods">
                                <div class="payment-message">
                                    <div class="scout-element__message scout-element__message--information"><p class="scout-element__message-text">This is a secure and SSL encrypted payment. Your credit card details are safe.</p></div>
                                </div>
                                <div class="payment-fields__sub-title">
                                    Select your payment method:
                                </div>
                                <input type="hidden" name="paymentProvider" value="Braintree" />
                                <div class="radio payment-fields__radio radio-surface" data-type="cards" data-cy="bnp-payment-selection--visa">
                                    <input type="radio" class="radio-surface__hidden" name="method" value="0" id="method-0" checked="" />
                                    <div class="check"></div>
                                    <label class="radio-surface__clickable" for="method-0">
                                        <div class="flex flex-between flex-center flex-wrap payment-fields__radio-description">
                                            <div>
                                                Pay by card
                                            </div>
                                            <div class="flex flex-center payment-fields__cards">
                                                <div class="payment-fields__card payment-fields__card--visa"></div>
                                                <div class="payment-fields__card payment-fields__card--mastercard"></div>
                                                <div class="payment-fields__card payment-fields__card--maestro"></div>
                                                <div class="payment-fields__card payment-fields__card--american-express"></div>
                                            </div>
                                        </div>
                                    </label>
                                    <form class="fields payment-form flex flex-wrap">
                                        <div class="row js-errors-no-width payment-fields__field payment-field--cardHolder" data-field="cardHolder">
                                            <div class="cell payment-fields__field-title">Cardholder Name</div>
                                            <div class="cell validity-con payment-fields__field-input--cardHolder" data-cy="bnp-payment--field-input-cardHolder">
                                                <input class="field" id="cardHolder" maxlength="1000" type="" placeholder="i.e. John Smith" data-cy="bnp-payment-fields--cardHolder" />
                                            </div>
                                            <p class="js-scout-element__error scout-element__input--error hid" data-cy="bnp-payment--field-input-cardHolder-error"></p>
                                        </div>
                                        <div class="row js-errors-no-width payment-fields__field payment-field--cardNumber" data-field="cardNumber">
                                            <div class="cell payment-fields__field-title">Card Number *</div>
                                            <div class="cell validity-con payment-fields__field-input--cardNumber" data-cy="bnp-payment--field-input-cardNumber">
                                                <div class="hosted-field" id="cardNumber" data-cy="bnp-payment-fields--cardNumber">
                                                    <iframe
                                                        src="https://assets.braintreegateway.com/web/3.87.0/html/hosted-fields-frame.min.html#2051e27c-c165-4e00-bc59-b4f7f30da3c2"
                                                        frameborder="0"
                                                        allowtransparency="true"
                                                        scrolling="no"
                                                        type="number"
                                                        name="braintree-hosted-field-number"
                                                        title="Secure Credit Card Frame - Credit Card Number"
                                                        id="braintree-hosted-field-number"
                                                        style="border: none; width: 100%; height: 100%; float: left;"
                                                    ></iframe>
                                                    <div style="clear: both;"></div>
                                                </div>
                                            </div>
                                            <p class="js-scout-element__error scout-element__input--error hid" data-cy="bnp-payment--field-input-cardNumber-error"></p>
                                        </div>
                                        <div class="row js-errors-no-width payment-fields__field payment-field--expiryDate payment-fields__field--col-2" data-field="expiryDate">
                                            <div class="cell payment-fields__field-title">Expiry Date *</div>
                                            <div class="cell validity-con payment-fields__field-input--expiryDate" data-cy="bnp-payment--field-input-expiryDate">
                                                <div class="hosted-field" id="expiryDate" data-cy="bnp-payment-fields--expiryDate">
                                                    <iframe
                                                        src="https://assets.braintreegateway.com/web/3.87.0/html/hosted-fields-frame.min.html#2051e27c-c165-4e00-bc59-b4f7f30da3c2"
                                                        frameborder="0"
                                                        allowtransparency="true"
                                                        scrolling="no"
                                                        type="expirationDate"
                                                        name="braintree-hosted-field-expirationDate"
                                                        title="Secure Credit Card Frame - Expiration Date"
                                                        id="braintree-hosted-field-expirationDate"
                                                        style="border: none; width: 100%; height: 100%; float: left;"
                                                    ></iframe>
                                                    <div style="clear: both;"></div>
                                                </div>
                                            </div>
                                            <p class="js-scout-element__error scout-element__input--error hid" data-cy="bnp-payment--field-input-expiryDate-error"></p>
                                        </div>
                                        <div class="row js-errors-no-width payment-fields__field payment-field--cvv payment-fields__field--col-2" data-field="cvv">
                                            <div class="cell payment-fields__field-title">CVV *</div>
                                            <div class="cell validity-con payment-fields__field-input--cvv" data-cy="bnp-payment--field-input-cvv">
                                                <div class="hosted-field" id="cvv" data-cy="bnp-payment-fields--cvv">
                                                    <iframe
                                                        src="https://assets.braintreegateway.com/web/3.87.0/html/hosted-fields-frame.min.html#2051e27c-c165-4e00-bc59-b4f7f30da3c2"
                                                        frameborder="0"
                                                        allowtransparency="true"
                                                        scrolling="no"
                                                        type="cvv"
                                                        name="braintree-hosted-field-cvv"
                                                        title="Secure Credit Card Frame - CVV"
                                                        id="braintree-hosted-field-cvv"
                                                        style="border: none; width: 100%; height: 100%; float: left;"
                                                    ></iframe>
                                                    <div style="clear: both;"></div>
                                                </div>
                                            </div>
                                            <p class="js-scout-element__error scout-element__input--error hid" data-cy="bnp-payment--field-input-cvv-error"></p>
                                        </div>
                                        <div class="row js-errors-no-width payment-fields__location">
                                            <div class="cell payment-fields__title">Country* &amp; Zip code*</div>
                                            <div class="scout-element__select-wrapper">
                                                <div class="scout-element__select validity-con cell" data-type="country" data-cy="bnp-traveller-details---country">
                                                    <label for="country" class="scout-element__select-label" data-cy="bnp-traveller-details---country-label">Billing Country*</label>
                                                    <select id="country" name="field68[]" class="scout-element__select-field" required="" data-cy="bnp-traveller-details---country-select">
                                                        <option selected="" disabled="" value="">Select Country</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="New Zealand">New Zealand</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="USA">USA</option>
                                                        <option disabled="">────────────────────────</option>
                                                        <option value="Afghanistan">Afghanistan</option>
                                                        <option value="Albania">Albania</option>
                                                        <option value="Algeria">Algeria</option>
                                                        <option value="American Samoa">American Samoa</option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="Angola">Angola</option>
                                                        <option value="Anguilla">Anguilla</option>
                                                        <option value="Antarctica">Antarctica</option>
                                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                        <option value="Argentina">Argentina</option>
                                                        <option value="Armenia">Armenia</option>
                                                        <option value="Aruba">Aruba</option>
                                                        <option value="Austria">Austria</option>
                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                        <option value="Bahamas">Bahamas</option>
                                                        <option value="Bahrain">Bahrain</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="Barbados">Barbados</option>
                                                        <option value="Belarus">Belarus</option>
                                                        <option value="Belgium">Belgium</option>
                                                        <option value="Belize">Belize</option>
                                                        <option value="Benin">Benin</option>
                                                        <option value="Bermuda">Bermuda</option>
                                                        <option value="Bhutan">Bhutan</option>
                                                        <option value="Bolivia">Bolivia</option>
                                                        <option value="Bora Bora">Bora Bora</option>
                                                        <option value="Borneo">Borneo</option>
                                                        <option value="Bosnia">Bosnia</option>
                                                        <option value="Botswana">Botswana</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="Brunei">Brunei</option>
                                                        <option value="Bulgaria">Bulgaria</option>
                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                        <option value="Burundi">Burundi</option>
                                                        <option value="Cambodia">Cambodia</option>
                                                        <option value="Cameroon">Cameroon</option>
                                                        <option value="Cape Verde">Cape Verde</option>
                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                        <option value="Central African Republic">Central African Republic</option>
                                                        <option value="Chad">Chad</option>
                                                        <option value="Chile">Chile</option>
                                                        <option value="China">China</option>
                                                        <option value="Colombia">Colombia</option>
                                                        <option value="Comoros">Comoros</option>
                                                        <option value="Congo">Congo</option>
                                                        <option value="Cook Islands">Cook Islands</option>
                                                        <option value="Costa Rica">Costa Rica</option>
                                                        <option value="Croatia">Croatia</option>
                                                        <option value="Cuba">Cuba</option>
                                                        <option value="Curaçao">Curaçao</option>
                                                        <option value="Cyprus">Cyprus</option>
                                                        <option value="Czech Republic">Czech Republic</option>
                                                        <option value="Denmark">Denmark</option>
                                                        <option value="Djibouti">Djibouti</option>
                                                        <option value="Dominica">Dominica</option>
                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                        <option value="DR of Congo">DR of Congo</option>
                                                        <option value="East Timor">East Timor</option>
                                                        <option value="Ecuador">Ecuador</option>
                                                        <option value="Egypt">Egypt</option>
                                                        <option value="El Salvador">El Salvador</option>
                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                        <option value="Eritrea">Eritrea</option>
                                                        <option value="Estonia">Estonia</option>
                                                        <option value="Ethiopia">Ethiopia</option>
                                                        <option value="Falkland Islands">Falkland Islands</option>
                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                        <option value="Fiji">Fiji</option>
                                                        <option value="Finland">Finland</option>
                                                        <option value="France">France</option>
                                                        <option value="French Polynesia">French Polynesia</option>
                                                        <option value="Gabon">Gabon</option>
                                                        <option value="Gambia">Gambia</option>
                                                        <option value="Georgia">Georgia</option>
                                                        <option value="Germany">Germany</option>
                                                        <option value="Ghana">Ghana</option>
                                                        <option value="Gibraltar">Gibraltar</option>
                                                        <option value="Greece">Greece</option>
                                                        <option value="Greenland">Greenland</option>
                                                        <option value="Grenada">Grenada</option>
                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                        <option value="Guam">Guam</option>
                                                        <option value="Guatemala">Guatemala</option>
                                                        <option value="Guernsey">Guernsey</option>
                                                        <option value="Guinea">Guinea</option>
                                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                        <option value="Guyana">Guyana</option>
                                                        <option value="Haiti">Haiti</option>
                                                        <option value="Honduras">Honduras</option>
                                                        <option value="Hong Kong">Hong Kong</option>
                                                        <option value="Hungary">Hungary</option>
                                                        <option value="Iceland">Iceland</option>
                                                        <option value="India">India</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Iran">Iran</option>
                                                        <option value="Iraq">Iraq</option>
                                                        <option value="Ireland">Ireland</option>
                                                        <option value="Isle of Man">Isle of Man</option>
                                                        <option value="Israel">Israel</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Ivory Coast">Ivory Coast</option>
                                                        <option value="Jamaica">Jamaica</option>
                                                        <option value="Japan">Japan</option>
                                                        <option value="Jersey">Jersey</option>
                                                        <option value="Jordan">Jordan</option>
                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                        <option value="Kenya">Kenya</option>
                                                        <option value="Kosovo">Kosovo</option>
                                                        <option value="Kuwait">Kuwait</option>
                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                        <option value="Laos">Laos</option>
                                                        <option value="Latvia">Latvia</option>
                                                        <option value="Lebanon">Lebanon</option>
                                                        <option value="Lesotho">Lesotho</option>
                                                        <option value="Liberia">Liberia</option>
                                                        <option value="Libya">Libya</option>
                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                        <option value="Lithuania">Lithuania</option>
                                                        <option value="Luxembourg">Luxembourg</option>
                                                        <option value="Macau">Macau</option>
                                                        <option value="Macedonia">Macedonia</option>
                                                        <option value="Madagascar">Madagascar</option>
                                                        <option value="Malawi">Malawi</option>
                                                        <option value="Malaysia">Malaysia</option>
                                                        <option value="Maldives">Maldives</option>
                                                        <option value="Mali">Mali</option>
                                                        <option value="Malta">Malta</option>
                                                        <option value="Martinique">Martinique</option>
                                                        <option value="Mauritania">Mauritania</option>
                                                        <option value="Mauritius">Mauritius</option>
                                                        <option value="Mexico">Mexico</option>
                                                        <option value="Micronesia">Micronesia</option>
                                                        <option value="Moldova">Moldova</option>
                                                        <option value="Monaco">Monaco</option>
                                                        <option value="Mongolia">Mongolia</option>
                                                        <option value="Montenegro">Montenegro</option>
                                                        <option value="Montserrat">Montserrat</option>
                                                        <option value="Morocco">Morocco</option>
                                                        <option value="Mozambique">Mozambique</option>
                                                        <option value="Myanmar (Burma)">Myanmar (Burma)</option>
                                                        <option value="Namibia">Namibia</option>
                                                        <option value="Nauru">Nauru</option>
                                                        <option value="Nepal">Nepal</option>
                                                        <option value="Netherlands">Netherlands</option>
                                                        <option value="New Caledonia">New Caledonia</option>
                                                        <option value="Nicaragua">Nicaragua</option>
                                                        <option value="Niger">Niger</option>
                                                        <option value="Nigeria">Nigeria</option>
                                                        <option value="North Korea">North Korea</option>
                                                        <option value="Northern Ireland">Northern Ireland</option>
                                                        <option value="Norway">Norway</option>
                                                        <option value="Oman">Oman</option>
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="Palestinian Territory">Palestinian Territory</option>
                                                        <option value="Panama">Panama</option>
                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                        <option value="Paraguay">Paraguay</option>
                                                        <option value="Peru">Peru</option>
                                                        <option value="Philippines">Philippines</option>
                                                        <option value="Poland">Poland</option>
                                                        <option value="Portugal">Portugal</option>
                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                        <option value="Qatar">Qatar</option>
                                                        <option value="Reunion">Reunion</option>
                                                        <option value="Romania">Romania</option>
                                                        <option value="Russia">Russia</option>
                                                        <option value="Rwanda">Rwanda</option>
                                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                        <option value="Samoa">Samoa</option>
                                                        <option value="San Marino">San Marino</option>
                                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                        <option value="Scotland">Scotland</option>
                                                        <option value="Senegal">Senegal</option>
                                                        <option value="Serbia">Serbia</option>
                                                        <option value="Seychelles">Seychelles</option>
                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                        <option value="Singapore">Singapore</option>
                                                        <option value="Slovakia">Slovakia</option>
                                                        <option value="Slovenia">Slovenia</option>
                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                        <option value="Somalia">Somalia</option>
                                                        <option value="South Africa">South Africa</option>
                                                        <option value="South Korea">South Korea</option>
                                                        <option value="Spain">Spain</option>
                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                        <option value="St Martin">St Martin</option>
                                                        <option value="Sudan">Sudan</option>
                                                        <option value="Suriname">Suriname</option>
                                                        <option value="Svalbard">Svalbard</option>
                                                        <option value="Swaziland">Swaziland</option>
                                                        <option value="Sweden">Sweden</option>
                                                        <option value="Switzerland">Switzerland</option>
                                                        <option value="Syria">Syria</option>
                                                        <option value="Taiwan">Taiwan</option>
                                                        <option value="Tajikistan">Tajikistan</option>
                                                        <option value="Tanzania">Tanzania</option>
                                                        <option value="Thailand">Thailand</option>
                                                        <option value="Togo">Togo</option>
                                                        <option value="Tonga">Tonga</option>
                                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                        <option value="Tunisia">Tunisia</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                        <option value="Uganda">Uganda</option>
                                                        <option value="Ukraine">Ukraine</option>
                                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                                        <option value="Uruguay">Uruguay</option>
                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                        <option value="Vanuatu">Vanuatu</option>
                                                        <option value="Vatican City (Holy See)">Vatican City (Holy See)</option>
                                                        <option value="Venezuela">Venezuela</option>
                                                        <option value="Vietnam">Vietnam</option>
                                                        <option value="Virgin Island, British">Virgin Island, British</option>
                                                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                        <option value="Wales">Wales</option>
                                                        <option value="Western Sahara">Western Sahara</option>
                                                        <option value="Yemen">Yemen</option>
                                                        <option value="Zambia">Zambia</option>
                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                    </select>
                                                </div>
                                                <p class="js-scout-element__error scout-element__select--error hid" data-cy="bnp-traveller-details---country-select-error"></p>
                                            </div>
                                            <div class="scout-element__input-wrapper payment-fields__location--zip-code">
                                                <div class="scout-element__input validity-con cell">
                                                    <label for="zipCode" class="scout-element__input-label">Zip Code*</label><input id="zipCode" class="scout-element__input-field" placeholder="" name="field69[]" type="string" value="" />
                                                </div>
                                                <p class="js-scout-element__error scout-element__input--error hid"></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="radio payment-fields__radio radio-surface" data-type="PayPal" data-cy="bnp-payment-selection--paypal">
                                    <input type="radio" class="radio-surface__hidden" name="method" value="0" id="method-4" />
                                    <div class="check"></div>
                                    <label class="radio-surface__clickable" for="method-4">
                                        <div class="flex flex-between flex-center flex-wrap payment-fields__radio-description alone">
                                            <div>
                                                Pay with PayPal
                                            </div>
                                            <div class="flex flex-center"><div class="payment-fields__card payment-fields__card--paypal"></div></div>
                                        </div>
                                    </label>
                                    <form class="fields invisible">
                                        <div class="row paypal js-errors-no-width">
                                            <div class="cell cell--block">
                                                <div class="text">Click here to sign into your PayPal Account:</div>
                                                <div id="paypal-container">
                                                    <img
                                                        class="payment-fields__radio--paypal-image lazy"
                                                        src="//cdn.tourradar.com/images/responsive/pw/paypal.png"
                                                        data-src="//cdn.tourradar.com/images/responsive/pw/paypal.png"
                                                        data-cy="bnp-payment-fields--paypal-image"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="end">
                            <div class="scout-element__checkbox checkbox terms-agree" data-cy="bnp-payment--terms-conditions">
                                <label for="terms-agree" class="scout-element__checkbox-label" data-error="'Please" accept="" the="" terms="" &amp;="" conditions&#039;="" data-cy="bnp-payment--terms-conditions-label">
                                    <input id="terms-agree" class="scout-element__checkbox-hidden" placeholder="" name="" type="checkbox" data-cy="bnp-payment--terms-conditions-input" /><span class="scout-element__checkbox-field"></span>
                                    <span class="payment-checkbox__terms">
                                        I accept TourRadar's <a href="#" class="js-terms-link terms-link" data-id="terms-conditions">Terms &amp; Conditions</a> and
                                        <a href="#" class="js-terms-link terms-link" data-id="privacy">Privacy Policy</a>; and Beyond The Nile Tours's
                                        <a href="#" class="terms-link js-terms-link__cancellation-popup" data-id="operator_4037" data-tour-id="111022">payment, cancellation and refund conditions</a>.
                                    </span>
                                </label>
                                <p class="js-scout-element__error scout-element__checkbox--error hid" data-cy="bnp-payment--terms-conditions-input-error"></p>
                            </div>
                            <div class="book-button js-form-block bookTypeButton">
                                <div class="js-book-button">
                                    <a href="#" class="book-now-button js-book-now-cta aa-btn" data-type="Book" data-to-charge="730.00" data-cy="bnp-payment--cta-book-now"> Book 1 space </a>
                                    <div class="notice"><b>No booking fees!</b> You will be charged <b>$730.00</b> once your booking is confirmed.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block card customer-feedback js-customer-feedback" data-total="9" data-ids="306,304,303,307,305,311,308,309,310" data-block-type="Customer Feedbacks">
                        <div class="customer-feedback__heading flex flex-between">
                            <h2 class="customer-feedback__heading-text">
                                What are people saying about TourRadar?
                            </h2>
                            <div class="customer-feedback__heading-logo"></div>
                        </div>
                        <div class="customer-feedback__carousel">
                            <ul class="js-customer-feedback__list customer-feedback__list many">
                                <li data-id="306" class="customer-feedback__item js-customer-feedback__item">
                                    <div class="customer-feedback__comment">
                                        I found a variety of tours for my destination that I can choose. The website provided enough detailed information that I can make decision on which one to book. The reviews from previous travelers are
                                        also very helpful.
                                    </div>
                                    <div class="customer-feedback__name">
                                        – Qun
                                    </div>
                                </li>
                            </ul>
                            <button type="button" class="aa-common-rounded-icon-button aa-common-rounded-icon-button--arrow-left customer-feedback__arrow customer-feedback__arrow js-customer-feedback__arrow"></button>
                            <button type="button" class="aa-common-rounded-icon-button aa-common-rounded-icon-button--arrow-right customer-feedback__arrow js-customer-feedback__arrow js-customer-feedback__arrow--right"></button>
                        </div>
                    </div>
                    <div class="block card terms-conditions no-bkg" data-block-type="Terms">
                        <h4>Terms &amp; Conditions</h4>
                        <div class="text">
                            TourRadar is an authorised Agent of Beyond The Nile Tours. Please familiarise yourself with the Beyond The Nile Tours
                            <a href="#" class="js-terms-link__cancellation-popup" data-id="operator_4037" data-tour-id="111022">payment, cancellation and refund policies</a> and TourRadar Inc.'s
                            <a href="#" class="js-terms-link" data-id="terms-conditions">Terms &amp; Conditions</a>. TourRadar will charge you in the stated currency and we do not charge any booking fees.
                        </div>
                        <div class="flex">
                            <div>
                                <h5>
                                    Operated by Beyond The Nile Tours
                                </h5>
                                <div class="text grey">
                                    suite 415 1480 Plessis Road Winnipeg, Manitoba Canada; Winnipeg; R2C 5R5
                                </div>
                            </div>
                            <div>
                                <h5>
                                    Agent: TourRadar Inc.
                                </h5>
                                <div class="text grey">
                                    3411 Silverside Road, Tatnall Building #104<br />
                                    City of Wilmington<br />
                                    New Castle 19810, Delaware<br />
                                    United States
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="block card" data-block-type="Trip Summary" data-cy="bnp-trip-summary">
                        <div class="block__title">My Trip</div>
                        <ul class="route exp">
                            <li>
                                <p class="departure__tour-name" data-cy="bnp-trip-summary--trip-name">Pharaohs Nile Cruise Adventure - 5 Star</p>
                                <span class="departure__days-length" data-cy="bnp-trip-summary--trip-length">8 days</span>
                            </li>
                            <li data-cy="bnp-trip-summary--start-city">Starts in Cairo, Egypt <span class="js-date-start">Saturday, 7 Jan 2023</span></li>
                            <li data-cy="bnp-trip-summary--end-city">Ends in Cairo, Egypt <span class="js-date-end">Saturday, 14 Jan 2023</span></li>
                            <li>Tour Type <span data-cy="bnp-trip-summary--tour-type">Group</span></li>
                            <li>Operated in <span data-cy="bnp-trip-summary--operated-in"> English </span></li>
                            <li data-cy="bnp-trip-summary--included">What's included <span> Accommodation, Guide, Meals, Transport </span></li>
                        </ul>
                    </div>
                    <div class="sticky-sidebar block card js-form-block bs_price_breakdown flex flex-column" data-no-discount-price="730" style="">
                        <div class="block__title">Price Breakdown</div>
                        <div class="scout-element__message scout-element__message--information" data-cy="bnp-accommodation--price-breakdown-message">
                            <p class="scout-element__message-text">Select the number of travellers and assign accommodation to display the price.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
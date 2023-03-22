<?php get_header(); ?>
    
<!-- Hero Section -->

<section class="hero">
    <h1 class="hero-title">Simplifying Loan Repayment Planning</h1>
    <p class="hero-subtext">
    Loanscan is an essential tool for employees at small scale banks. It simplifies the loan repayment process by accurately, quickly, and reliably calculating EMIs based on loan amount, interest rate, and tenure. With custom repayment options, it helps employees make informed decisions for their clients and streamlines the loan repayment process, saving time and increasing efficiency. As a trusted tool for loan repayment planning, Loanscan is a valuable resource for employees at small scale banks.
    </p>
</section>

<div class="tryit"><p>Try it For Yourself</p></div>

<!-- Loan Calculator Section -->

<section class="loan-calculator" id="calc">
    <div class="top">
    <h2>Loan Calculator</h2>

    <form action="#">
        <div class="group">
        <div class="title">Amount</div>
        <input type="text" class="loan-amount" value="" placeholder="0" />
        </div>

        <div class="group">
        <div class="title">Interest Rate</div>
        <input type="text" class="interest-rate" value="" placeholder="0" />
        </div>

        <div class="group">
        <div class="title">Tenure (In Months)</div>
        <input type="text" class="loan-tenure" value="" placeholder="0" />
        </div>
    </form>
    </div>
    <div class="result">
    <div class="left">
        <div class="loan-emi">
        <h3>Loan EMI</h3>
        <div class="value">123/div>
        </div>

        <div class="total-interest">
        <h3>Total Interest Payable</h3>
        <div class="value">1234</div>
        </div>

        <div class="total-amount">
        <h3>Total Amount</h3>
        <div class="value">12345</div>
        </div>

        <button class="calculate-btn">Calculate</button>
    </div>
    </div>
    <div class="right">
    <canvas id="myChart" width="400" height="400"></canvas>
    </div>
</section>

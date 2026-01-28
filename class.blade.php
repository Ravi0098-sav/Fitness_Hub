@extends('frontend.layouts.main')

@section('main-content')

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
        <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Gym Classes</h4>
        <div class="d-inline-flex">
            <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
            <p class="m-0 text-white px-2">/</p>
            <p class="m-0 text-white">Gym Classes</p>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- BMI Calculation Start -->
<div class="container-fluid position-relative bmi mt-5" style="margin-bottom: 90px;">
    <div class="container">
        <div class="row px-3 align-items-center">
            <div class="col-md-6">
                <div class="pr-md-3 d-none d-md-block">
                    <h4 class="text-primary">Body Mass Index </h4>
                    <h4 class="display-4 text-white font-weight-bold mb-4">What is BMI?</h4>
                    <p class="m-0 text-white">
                        BMI is a measure of body fat based on height and weight. It's used to categorize individuals
                        into different weight categories and assess health risks.
                    </p>
                </div>
            </div>

            <div class="col-md-6 bg-secondary py-5">
                <div class="py-5 px-3">
                    <h1 class="mb-4 text-white">Calculate your BMI</h1>

                    <form id="bmiForm">
                        <div class="form-row">
                            <div class="col form-group">
                                <input type="number" step="0.1" id="weight"
                                    class="form-control form-control-lg bg-dark text-white"
                                    placeholder="Weight (KG)" required>
                            </div>
                            <div class="col form-group">
                                <input type="number" step="0.1" id="height"
                                    class="form-control form-control-lg bg-dark text-white"
                                    placeholder="Height (CM)" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col form-group">
                                <input type="number" id="age"
                                    class="form-control form-control-lg bg-dark text-white"
                                    placeholder="Age" required>
                            </div>
                            <div class="col form-group">
                                <select id="gender"
                                    class="custom-select custom-select-lg bg-dark text-white" required>
                                    <option value="">Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col">
                                <button type="submit"
                                    class="btn btn-lg btn-block btn-dark border-light">
                                    Calculate Now
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- BMI Result -->
                    <div id="bmiResult" class="mt-4" style="display:none;">
                        <div class="alert alert-info text-center">
                            <h3 class="text-white mb-3">Your BMI Result</h3>

                            <div class="bg-white text-dark p-4 rounded mb-3">
                                <h1 id="bmiValue" class="display-3 font-weight-bold mb-0"></h1>
                                <p class="mb-0">BMI Score</p>
                            </div>

                            <div id="bmiCategory" class="p-3 rounded mb-3">
                                <h4 id="categoryText" class="font-weight-bold mb-2"></h4>
                                <p id="categoryDescription" class="mb-0"></p>
                            </div>

                            <button type="button" class="btn btn-light" onclick="resetBMI()">
                                Calculate Again
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- BMI Calculation End -->

<!-- Back to Top -->
<a href="#" class="btn btn-outline-primary back-to-top">
    <i class="fa fa-angle-double-up"></i>
</a>

<!-- BMI Script -->
<script>
document.getElementById('bmiForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const weight = parseFloat(document.getElementById('weight').value);
    const heightCm = parseFloat(document.getElementById('height').value);
    const age = parseInt(document.getElementById('age').value);
    const gender = document.getElementById('gender').value;

    if (!weight || !heightCm || !age || !gender) {
        alert('Please fill in all fields');
        return;
    }

    const heightM = heightCm / 100;
    const bmi = (weight / (heightM * heightM)).toFixed(1);

    let category, description, bgColor, textColor;

    if (bmi < 18.5) {
        category = 'Underweight';
        description = 'You may need to gain weight.';
        bgColor = '#17a2b8';
        textColor = '#fff';
    } else if (bmi < 25) {
        category = 'Normal Weight';
        description = 'You have a healthy weight.';
        bgColor = '#28a745';
        textColor = '#fff';
    } else if (bmi < 30) {
        category = 'Overweight';
        description = 'You may need to lose some weight.';
        bgColor = '#ffc107';
        textColor = '#000';
    } else {
        category = 'Obese';
        description = 'Consult a healthcare provider.';
        bgColor = '#dc3545';
        textColor = '#fff';
    }

    document.getElementById('bmiValue').textContent = bmi;
    document.getElementById('categoryText').textContent = category;
    document.getElementById('categoryDescription').textContent = description;

    const categoryDiv = document.getElementById('bmiCategory');
    categoryDiv.style.backgroundColor = bgColor;
    categoryDiv.style.color = textColor;

    document.getElementById('bmiResult').style.display = 'block';
});

function resetBMI() {
    document.getElementById('bmiForm').reset();
    document.getElementById('bmiResult').style.display = 'none';
}
</script>

<style>
#bmiResult {
    animation: fadeIn 0.5s ease-in;
}
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-10px); }
    to { opacity: 1; transform: translateY(0); }
}
#bmiCategory {
    transition: all 0.3s ease;
}
</style>

@endsection

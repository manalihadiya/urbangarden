
<?php
require_once "config.php";
$pageTitle = "Urban Garden Planner";
include "header.php";
?>

<section class="hero">

<div class="hero-overlay"></div>

<div class="hero-content">

<p class="eyebrow">YOUR DREAM GARDEN, PLANNED SMARTLY</p>

<h1>Urban Garden <span>Planner</span></h1>

<p class="hero-copy">
Design your perfect green space, choose the right plants,
get personalized care tips, and turn any urban space into
a thriving garden.
</p>

<div class="hero-actions">

<a href="planner.php" class="btn btn-green">
<i class="fa-solid fa-leaf"></i>
Start Planning
<i class="fa-solid fa-arrow-right"></i>
</a>

<a href="#features" class="btn btn-outline">
<i class="fa-regular fa-circle-play"></i>
Explore Features
</a>

</div>
</div>

<div class="handwritten">
Small Spaces,<br>
Big Green Dreams ♡
</div>

<div class="feature-panel" id="features">

<a href="planner.php" class="feature">
<i class="fa-solid fa-seedling"></i>
<h3>Garden Planner</h3>
<p>Design your space with smart suggestions</p>
</a>

<a href="plants.php" class="feature">
<i class="fa-solid fa-spa"></i>
<h3>Plant Library</h3>
<p>Discover the best plants for your environment</p>
</a>

<a href="care.php" class="feature">
<i class="fa-regular fa-sun"></i>
<h3>Smart Care Reminders</h3>
<p>Never miss watering or plant care</p>
</a>

<a href="saved_plans.php" class="feature">
<i class="fa-solid fa-users"></i>
<h3>My Garden Plans</h3>
<p>View your saved garden ideas</p>
</a>

<a href="budget.php" class="feature">
<i class="fa-solid fa-recycle"></i>
<h3>Budget Calculator</h3>
<p>Estimate your gardening expenses</p>
</a>

</div>
</section>

<section class="section intro">

<p class="eyebrow dark">WELCOME TO URBANSPROUT</p>

<h2>Bring Nature Into Your Space</h2>

<p class="section-copy">
Create beautiful green spaces at home with smart gardening
ideas, plant recommendations and simple care guidance.
</p>

<div class="card-grid three">

<article class="image-card">
<img src="https://images.unsplash.com/photo-1466692476868-aef1dfb1e735?auto=format&fit=crop&w=900&q=85" alt="Garden plants">
<div>
<h3>Make a Green Corner</h3>
<p>Start small and build your own garden.</p>
</div>
</article>

<article class="image-card">
<img src="https://images.unsplash.com/photo-1490750967868-88aa4486c946?auto=format&fit=crop&w=900&q=85" alt="Colourful flowers">
<div>
<h3>Add Colour and Life</h3>
<p>Discover colourful flowers for your space.</p>
</div>
</article>

<article class="image-card">
<img src="https://images.unsplash.com/photo-1485955900006-10f4d324d411?auto=format&fit=crop&w=900&q=85" alt="Potted plants">
<div>
<h3>Care With Confidence</h3>
<p>Learn how to care for your plants.</p>
</div>
</article>

</div>

<div class="center">
<a href="planner.php" class="btn btn-dark">Create My Garden Plan</a>
</div>

</section>

<?php include "footer.php"; ?>

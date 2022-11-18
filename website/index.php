<?php 
include('config.php');
include('./includes/header.php'); ?>
    <div id="wrapper">
        <div id="hero">
            <?php echo random_images($photos); ?>
        </div>
            
        <main>
            <h1>Welcome to our Web App Programming Class!</h1>
            <h2>We are going to learn PHP!</h2>
            <p>SampleSampleSampleSampleSampleSample
                SampleSampleSampleSampleSampleSample
                SampleSampleSampleSampleSampleSampleSample
            </p>
            <h2>Another Headline 2</h2>
        </main>

        <aside>

        </aside>
    </div>
<?php include('./includes/footer.php'); ?>
<!-- Riscrivere questa pagina del sito google
https://policies.google.com/faq.
Ci sono diverse domande con relative risposte.
Gestire il “Database” e la visualizzazione di
queste domande e risposte con PHP. -->

<!DOCTYPE html>
<html>
  <head>
    <title>Google FAQ</title>
    <link rel='stylesheet' type='text/css' href='css/style.php' />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
  </head>

  <body>

  <!-- Variable Questions and Answers -->
    <?php
    $faq = [
      [
        'question' => 'How does Google protect my privacy and keep my information secure?',
        'answer' => [
          'We know security and privacy are important to you – and they are important to us, too. We make it a priority to provide strong security and give you confidence that your information is safe and accessible when you need it.',
          'We’re constantly working to ensure strong security, protect your privacy, and make Google even more effective and efficient for you. We spend hundreds of millions of dollars every year on security, and employ world-renowned experts in data security to keep your information safe. We also built easy-to-use privacy and security tools like Google Dashboard, 2-step verification and Ads Settings. So when it comes to the information you share with Google, you’re in control.',
          'You can learn more about safety and security online, including how to protect yourself and your family online, at the <a href="https://safety.google/"> Google Safety Center.</a>',
          '<a href="https://privacy.google.com/?hl=en">Learn more</a> about how we keep your personal information private and safe — and put you in control.'
        ]
      ],
      [
        'question' => 'How can I remove information about myself from Google\'s search results?',
        'answer' => [
          'Google search results are a reflection of the content publicly available on the web. Search engines can’t remove content directly from websites, so removing search results from Google wouldn’t remove the content from the web. If you want to remove something from the web, you should <a href="https://support.google.com/websearch/answer/9109?hl=en">contact the webmaster</a> of the site the content is posted on and ask him or her to make a change. Once the content has been removed and Google has noted the update, the information will no longer appear in Google’s search results. If you have an urgent removal request, you can also <a href="https://support.google.com/websearch/troubleshooter/3111061?hl=en">visit our help page for more information.</a>'
        ]
      ],
      [
        'question' => 'Are my search queries sent to websites when I click on Google Search results?',
        'answer' => [
          'In some cases, yes. When you click on a search result in Google Search, your web browser also may send the Internet address, or URL, of the search results page to the destination webpage as the <a href="https://policies.google.com/privacy/key-terms?hl=en#toc-terms-http">Referrer URL</a>. The URL of the search results page may sometimes contain the search query you entered. If you are using SSL Search (Google’s encrypted search functionality), under most circumstances, your search terms will not be sent as part of the URL in the Referrer URL. There are some exceptions to this behavior, such as if you are using some less popular browsers. More information on SSL Search can be found <a href="https://support.google.com/websearch/answer/173733?hl=en">here.</a> Search queries or information contained in the Referrer URL may be available via Google Analytics or an application programming interface (API). In addition, advertisers may receive information relating to the exact keywords that triggered an ad click.'
        ]
      ],
    ];
    ?>


    <header>
      <div class="row">

        <!-- Top-header-->
        <!-- Left - Logo and Title -->
        <div class="col">
          <img src="img/logo.png" alt="Google logo">
          <h3>Privacy & Terms</h3>
        </div>

        <!-- Right - Grid and Avatar -->
        <div class="col">
          <img src="img/grid.png" alt="grid menu">
          <img src="img/avatar.png" alt="user avatar">
        </div>
      </div>

      <!-- Navbar -->
      <div class="row">
        <nav>
          <ul>
            <li>Overview</li>
            <li>Privacy Policy</li>
            <li>Terms of Service</li>
            <li>Technologies</li>
            <li>FAQ</li>
          </ul>
        </nav>
        <hr>
      </div>
    </header>

    <main>

      <!-- Questions and answers listed -->
      <?php
        foreach ($faq as $key => $value) {
          echo "<h2>" . $value['question'] . "</h2>";
          for ($i=0; $i < count($value['answer']); $i++) {
            echo "<p>" . $value['answer'][$i] . "</p>";
          }
        }
      ?>
    </main>

    <footer>
      <div class="row">

        <!-- Left - Navbar -->
        <nav>
          <ul>
            <li>Overview</li>
            <li>Privacy Policy</li>
            <li>Terms of Service</li>
            <li>Technologies</li>
            <li>FAQ</li>
          </ul>
        </nav>

        <!-- Right - Language setection-->
        <select name="language">
          <option value="English">English</option>
          <option value="Español">Español</option>
          <option value="Italiano">Italiano</option>
          <option value="Português">Português</option>
        </select>
      </div>
    </footer>
  </body>
</html>

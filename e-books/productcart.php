<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Italy Travel Guide</title>
<style>
  /* Theme colors */
  :root {
    --primary: #228B22;    /* Forest Green */
    --secondary: #556B2F;  /* Olive */
    --accent: #98FB98;     /* Mint */
    --background: #FFFFF0; /* Ivory */
    --text-color: #2F4F4F; /* Charcoal */
    --button-cta: #FFD700; /* Gold */
  }

  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: var(--background);
    margin: 30px;
    color: var(--text-color);
  }

  .container {
    max-width: 900px;
    background-color: #fff;
    margin: 0 auto;
    border-radius: 14px;
    box-shadow: 0 5px 18px rgba(34,139,34,0.25);
    overflow: hidden;
    display: flex;
    gap: 30px;
    padding: 30px;
  }

  .book-image img {
    max-width: 320px;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(85,107,47,0.3);
  }

  .content-wrapper {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 20px;
  }

  /* Title block */
  .title-block {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 12px;
  }

  .title-left {
    display: flex;
    flex-direction: column;
    gap: 6px;
    max-width: 70%;
  }

  .book-title {
    font-size: 28px;
    font-weight: 700;
    color: var(--primary);
    white-space: nowrap; /* full title in one line */
  }

  .series {
    font-size: 16px;
    font-style: italic;
    color: var(--secondary);
    font-weight: 600;
  }

  .words-images {
    display: flex;
    align-items: center;
    gap: 14px;
    font-size: 15px;
    color: var(--secondary);
    font-weight: 600;
    margin-top: 4px;
  }

  .words-images span {
    display: flex;
    align-items: center;
    gap: 6px;
  }

  .words-images .icon {
    font-size: 18px;
  }

  /* Right side: share, like, read now */
  .title-right {
    display: flex;
    align-items: center;
    gap: 22px;
    flex-wrap: nowrap;
  }

  button.icon-btn {
    background-color: transparent;
    border: none;
    cursor: pointer;
    font-size: 22px;
    color: var(--secondary);
    transition: color 0.3s ease;
    padding: 6px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  button.icon-btn:hover {
    color: var(--primary);
  }

  button.btn-readnow {
    background-color: var(--button-cta);
    color: var(--text-color);
    font-weight: 700;
    border: none;
    border-radius: 28px;
    padding: 10px 28px;
    cursor: pointer;
    box-shadow: 0 4px 14px rgba(255,215,0,0.6);
    transition: background-color 0.3s ease;
    font-size: 16px;
    white-space: nowrap;
  }

  button.btn-readnow:hover {
    background-color: #e6c200;
  }

  .description {
    font-size: 17px;
    line-height: 1.6;
    color: var(--text-color);
  }

  .author {
    font-size: 18px;
    font-weight: 600;
    color: var(--secondary);
    margin-top: 8px;
  }

  .author-name {
    font-weight: 700;
    margin-top: 4px;
    color: var(--primary);
  }

  .btn-group {
    margin-top: 20px;
    display: flex;
    gap: 18px;
  }

  .btn {
    background-color: var(--button-cta);
    color: var(--text-color);
    border: none;
    border-radius: 26px;
    padding: 12px 36px;
    font-weight: 700;
    font-size: 16px;
    cursor: pointer;
    box-shadow: 0 5px 20px rgba(255,215,0,0.7);
    transition: background-color 0.3s ease;
    white-space: nowrap;
  }

  .btn:hover {
    background-color: #e6c200;
  }
</style>
</head>
<body>

<div class="container">
  <div class="book-image">
    <img src="./img.png" alt="Italy Travel Guide Book Cover" />
  </div>
  <div class="content-wrapper">

    <div class="title-block">
      <div class="title-left">
        <div class="book-title">Italy: The Ultimate Travel Guide</div>
        <div class="series">Europe Series</div>
        <div class="words-images">
          <span title="Words"><span class="icon">📝</span> 1500 words</span>
          <span title="Images"><span class="icon">🖼️</span> 10 images</span>
        </div>
      </div>

      <div class="title-right" aria-label="Actions">
        <button class="icon-btn" title="Share" aria-label="Share">&#128257;</button>
        <button class="icon-btn" title="Like" aria-label="Like">&#10084;</button>
        <button class="btn-readnow">Read Now</button>
      </div>
    </div>

    <div class="description" aria-label="Book description">
      Discover the timeless beauty of Italy — from the colorful seaside villages of Cinque Terre to the ancient streets of Rome. This guide offers travel tips, local secrets, must-visit landmarks, and hidden gems to make your Italian adventure unforgettable.
    </div>

    <div class="author" aria-label="Author">
      ✍️ Author
      <div class="author-name">By Sophia Bennett</div>
    </div>

    <div class="btn-group" aria-label="Purchase options">
      <button class="btn">Buy Now</button>
      <button class="btn">Read More</button>
    </div>

  </div>
</div>

</body>
</html>
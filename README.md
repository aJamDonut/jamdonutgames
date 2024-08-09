# How to

- Clone the repo
- Add or change a page inside /pages/
- Run php generate-static.php
- Redeploy

# How it works

- Loops over *.html files in /pages/
- Get contents as $content
- Open template file /template.html
- Replace {content} in /template.html with $content
- Save the result as /<name>.html
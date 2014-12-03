<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Tags Counter</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <p id="title">Tags counter</p>
    <form id="tags-counter" action="" method="post">
        <label for="tags">
            <span id="label">Enter a tag:</span> <input id="tag-field" type="text" name="tag"/>
        </label>
        <input id="button" type="submit" name="submit" value="Check"/>
        <section>
            <?php
            session_start();

            function isHTML($enteredTag)
            {
                $allTags = array(
                    '!DOCTYPE',
                    'a',
                    'abbr',
                    'acronym',
                    'address',
                    'applet',
                    'area',
                    'article',
                    'aside',
                    'audio',
                    'b',
                    'base',
                    'basefont',
                    'bdi',
                    'bdo',
                    'big',
                    'blockquote',
                    'body',
                    'br',
                    'button',
                    'canvas',
                    'caption',
                    'center',
                    'cite',
                    'code',
                    'col',
                    'colgroup',
                    'command',
                    'datalist',
                    'dd',
                    'del',
                    'details',
                    'dfn',
                    'dir',
                    'div',
                    'dl',
                    'dt',
                    'em',
                    'embed',
                    'fieldset',
                    'figcaption',
                    'figure',
                    'font',
                    'footer',
                    'form',
                    'frame',
                    'frameset',
                    'h1',
                    'h2',
                    'h3',
                    'h4',
                    'h5',
                    'h6',
                    'head',
                    'header',
                    'hgroup',
                    'hr',
                    'html',
                    'i',
                    'iframe',
                    'img',
                    'input',
                    'ins',
                    'kbd',
                    'keygen',
                    'label',
                    'legend',
                    'li',
                    'link',
                    'main',
                    'map',
                    'mark',
                    'menu',
                    'meta',
                    'meter',
                    'nav',
                    'noframes',
                    'noscript',
                    'object',
                    'ol',
                    'optgroup',
                    'option',
                    'output',
                    'p',
                    'param',
                    'pre',
                    'progress',
                    'q',
                    'rp',
                    'rt',
                    'ruby',
                    's',
                    'samp',
                    'script',
                    'section',
                    'select',
                    'small',
                    'source',
                    'span',
                    'strike',
                    'strong',
                    'style',
                    'sub',
                    'summary',
                    'sup',
                    'table',
                    'tbody',
                    'td',
                    'textarea',
                    'tfoot',
                    'th',
                    'thead',
                    'time',
                    'title',
                    'tr',
                    'track',
                    'tt',
                    'u',
                    'ul',
                    'var',
                    'video',
                    'wbr'
                );
                $isTag = false;

                foreach ($allTags as $tag) {
                    if (strtoupper($enteredTag) == strtoupper($tag)) {
                        $isTag = true;
                        break;
                    }
                }

                return $isTag;
            }

            if (isset($_POST['submit'])) {
                $tag = $_POST['tag'];
                $tag = str_replace('<', '', $tag);
                $tag = str_replace('>', '', $tag);

                if (!(isset($_SESSION["score"]))) {
                    $_SESSION["score"] = 0;
                }

                if (isHTML($tag) == 1) {
                    $_SESSION["score"]++;
                    echo ('<p id="valid">Valid HTML tag!</p>');
                    echo ('<p id="score">Score: '.$_SESSION["score"].'</p>');
                } else {
                    echo ('<p id="invalid">Invalid HTML tag!</p>');
                    echo ('<p id="score">Score: '.$_SESSION["score"].'</p>');
                }
            }
            ?>
        </section>
    </form>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: mitchell
 * Date: 9/9/19
 * Time: 9:17 PM
 */
echo <<<EOS
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Survivors: Citizens of the World, by Pascal Ustin Dubuisson, translated by Mitchell Verter</title>
    <style>
        a {
            font-weight: 700;
            font-size: 250%;
        }

        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 80%;
        }

        .photo {
            margin: 25px;
            padding: 15px;
            border: 3px maroon solid;
        }

        table {
            border: 7px solid black;
        }

        tr {
            border: 5px solid black;
            margin-bottom: 10px;
            padding: 10px;
        }

        td {
            padding: 10px;
        }

        td.english-paragraph {
            border: 5px solid #001aa0;
        }

        td.spanish-paragraph {
            border: 5px solid #d30731;
        }

        p {
            margin: 20px;
            text-indent: 10px;
        }

        p::first-letter {
            font-size: 200%;
            font-weight: 700;
        }

        div {
            margin: 20px;
            border: 1px dotted gray;
        }

        p {
            margin: 0;
        }

        body {
            font-size: 150%;
            width: 80%;
            margin: auto;
            font-weight: 500;
        }

        .two-column {
            border: 2px solid black;
            display: flex;
            flex-direction: row;
        }

        .english {
            border: 5px solid #001aa0;
            flex-grow: 1;
            width: 45%
        }

        .spanish {
            border: 5px solid #d30731;
            flex-grow: 1;
            width: 45%
        }

        blockquote {
            border: 5px solid maroon;
        }

        .michaelangelo {
            text-align: center;
            border: 5px solid maroon;
        }

        figcaption {
            background-color: #222;
            color: #fff;
            font: italic 125% sans-serif;
            padding: 3px;
            text-align: center;
            margin: 15px;
            font-weight: 900;
        }

        /* Style the button that is used to open and close the collapsible content */
        .collapsible {
/*            background-color: #eee;
            color: #444; */
        background-color: #d30731; 
        color: #001aa0;
        font-weight: 900;

            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
        }

        /* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
        .active, .collapsible:hover {
            background-color: #ccc; 
        }

        /* Style the collapsible content. Note: hidden by default */
        .collapsible-content {
            padding: 0 18px;
            display: none;
            overflow: hidden;
            background-color: #f1f1f1; 
        }
            
      </style>
</head>
<body>

<div id="declaration-of-translation">
    <button type="button" class="collapsible bluered">
        Deklarasyon Tradiksyon
    </button>
    <div id="kreyol-explanation" class="collapsible-content"
         style="background-color: #001aa0; color:white; font-weight: 900">
        <div class="michaelangelo">
            <blockquote> "Eskilti a deja konplè nan blòk an mab, anvan mwen kòmanse travay mwen. Li deja la, mwen jis
                gen taye lwen materyèl yo initil. "
            </blockquote>
            <cite>Michaelangelo</cite>
        </div>

        <div id="kreole-draft-explanation">
            <div>
                <p>Tradiksyon - oswa nenpòt ki ekri - se tankou polisaj yon Damian, ak chak pas, yon sèl lis sou sifas
                    la ak klere klere la</p>
            </div>

            <p>Mwen travay nan repetisyon. Sa a gen anpil</p>
            <p>Jwenn anba a:<br>
                      <br> (G) sizyèm bouyon ak pi lwen pase: polir. Louvri pou kòmantè piblik la
                      <br> (F) Senkyèm bouyon. Konpare katriyèm bouyon orijinal Panyòl la
                      <br> (E) Katriyèm bouyon - bouyon avèg. Panyòl se raman konsilte.
                <br>(D) Twazyèm bouyon - ki sa mwen ap travay sou kounye a
                <br> (C) Dicey bouyon: tradui byen vit. Minim itilizasyon nan diksyonè.
                <br> (B) Premye bouyon: Typing pandan y ap li

                <br> (A) Panyòl orijinal la</p>
        </div>

        <div class="michaelangelo">
 <pre>
Vèsè Shenxiu a li:

Kò a se pyebwa bodhi a
Lide a se tankou kanpe yon glas klere la.
Nan tout tan nou dwe fè efò Polonè li
epi yo pa dwe kite pousyè a kolekte.

Huineng te ekri sa a:

Bodhi orijinal pa gen okenn pyebwa.
Iwa a klere tou pa gen okenn kanpe.
Fondamantalman pa gen yon sèl bagay.
Ki kote ka pousyè leve?
 </pre>
        </div>

    </div>

    <div class="photo">
        <figure>
            <img src="images/haiticoat.jpeg"  width="50%" />
        </figure>
    </div>

    <button type="button" class="collapsible redblue">
        Declaration of Translation
    </button>

    <div id="english-explanation" class="collapsible-content" style="background-color: #d30731; color:white; font-weight: 900">
        <div class="michaelangelo">
            <blockquote> “The sculpture is already complete within the marble block, before I start my work. It is
                already there, I just have to chisel away the superfluous material.”
            </blockquote>
            <cite>Michaelangelo</cite>
        </div>

        <div id="english-draft-explanation">
            <div><p>translation -- or any writing -- is like polishing a diamond, with each pass, one smooths out the
                surface and brightens the shine</p>
            </div>

            <p>I work in repetitions. This contains many</p>
            <p>Find below:
                <br> (G) Sixth draft and beyond: Polishing. Open for public comment (not yet)
                <br>(F) Fifth draft. Compare fourth draft to Spanish original (not yet)
                <br>(E) Fourth draft - Blind draft. Spanish is rarely consulted.
                <br>(D) Third draft -- Comparing choices with online tools
                <BR> (C) Second draft: Translating quickly. Minimal usage of dictionary.
                <BR> (B) First Draft: Typing while reading
                <br>(A) Spanish original</p>
        </div>

        <div class="michaelangelo">
 <pre>
 Shenxiu's verse read:

The body is the bodhi tree
The mind is like a bright mirror's stand.
At all times we must strive to polish it
and must not let dust collect.

Huineng wrote this:

Bodhi originally has no tree.
The bright mirror also has no stand.
Fundamentally there is not a single thing.
Where could dust arise?

 </pre>
        </div>
    </div>
</div>



<script>
    var collapsible = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < collapsible.length; i++) {
        collapsible[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            console.log(content, this, content.style.display);

            if (content.style.display === "block") {
                content.style.display = "none"
            } else {
                content.style.display = "block"
            }
        })
    }
</script>




<div id="bilingual-container"/>

<div>
    <table>
        <tbody>

EOS;

$english_file = file_get_contents("english.json");
$spanish_file = file_get_contents("spanish.json");
$english_paragraphs = json_decode($english_file);
$spanish_paragraphs = json_decode($spanish_file);

$english_length = count($english_paragraphs);
$spanish_length = count($spanish_paragraphs);

if ($english_length !== $spanish_length) {

}

for ($i = 0; $i < $english_length; $i++) {
    $english_paragraph = $english_paragraphs[$i];
    $spanish_paragraph = $spanish_paragraphs[$i];

    if (strstr($english_paragraph, "<img src")) {
        $match = [];
        preg_match('/"(.*)"/', $english_paragraph, $match);
        $url = $match[1];
        $caption = $english_paragraphs[++$i];
        RenderImage($url, $caption);
    } elseif (strstr($english_paragraph, "<h1>")
        || strstr($english_paragraph, "<a name")) {
        RenderMenu($english_paragraph, $spanish_paragraph);
    } else {
        RenderParagraph($english_paragraph, $spanish_paragraph);
    }
}

function RenderParagraph($englishParagraph, $spanishParagraph)
{
    echo <<<EOS
        <tr>
          <td class="english-paragraph">
            $englishParagraph
          </td>
          <td class="spanish-paragraph">
            $spanishParagraph
          </td>
        </tr>
EOS;
}

function RenderImage($source, $caption)
{

    echo <<<EOS
        <tr>
            <td colSpan="2">
                <figure>
                    <img src="$source"
                         alt="$caption">
                    <figcaption>$caption</figcaption>
                </figure>
            </td>
        </tr>
EOS;
}

function RenderMenu($englishMenu, $spanishMenu)
{
    echo <<<EOS
        <tr>
          <td>
            $englishMenu
          </td>
          <td>
            $spanishMenu
          </td>
        </tr>
EOS;
}


echo <<<EOS
            </tbody>
          </table>
        </div>
</div>
</body>
</html>
EOS;

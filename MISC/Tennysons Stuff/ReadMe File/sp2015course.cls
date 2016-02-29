\NeedsTeXFormat{LaTeX2e}
\ProvidesClass{sp2015course}
\LoadClass{article}

\newcommand{\course}[1]{\newcommand{\CourseTitle}{#1}}
%\newcommand{\title}[1]{\newcommand{\PaperTitle}{#1}}

%% Common helper packages %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

\RequirePackage{fancyhdr}
\RequirePackage[usenames]{color}
\RequirePackage{alltt}
\RequirePackage[letterpaper,margin=1in]{geometry}
\RequirePackage{parskip}
\RequirePackage{xstring}
\RequirePackage{comment}
\RequirePackage{amsmath}
%\RequirePackage{utf8}
\RequirePackage{amsfonts}
\RequirePackage{multicol}
\RequirePackage{amssymb}
\RequirePackage{bm}
\RequirePackage{lmodern}
\RequirePackage{graphicx}
\graphicspath{ {images/} }

\frenchspacing

\renewcommand\@maketitle{
  \setlength\parindent{0in}
  \addtolength\parskip{1ex}
  \setlength\fboxrule{.5mm}\setlength{\fboxsep}{1.2mm}
  \newlength\courseheader
  \setlength\courseheader\textwidth
  \addtolength\courseheader{-4mm}
  \begin{center}
  \framebox{\parbox\courseheader{\large
  \CourseTitle\hfill Spring 2016\\
  Tennyson T Bardwell \hfill \@title}}
  \end{center}
  \bigskip
}

\newcommand{\makecover}{
  \vspace*{.45\textheight}
  \thispagestyle{empty}
  \begin{center}
  {
  \huge
  \textbf{\@title\\}
  \noindent\rule[0.5ex]{\linewidth}{1pt}
  \large
  Tennyson T Bardwell\\
  \CourseTitle\\
  Spring 2016\\
  }
  \pagebreak
  \end{center}
}
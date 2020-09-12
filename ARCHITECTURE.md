# VWikis Architecture

This document briefly describes the VWikis Architecture after the assembly line model.

## How to think of this

VWikis will be written to work a bit like an assembly line. The VWikis core will be very small, to the point of not providing user login functionality. This core will then provide an "assembly line" for modules to work on. The ultamate goal of the assembly line is to render the requested page, accounting for any side effects of that.

## Implementation

Current, I plan to implement this by creating one global object that contains the content that will ultimately be rendered, and extensions are free to access this. There is one catch, however, in that the variable storing the content will be private to an object and the content will be manipulated by invoking methods.

## The main `$wgOutput`

The output is contained in `$wgOutput->mContent`.

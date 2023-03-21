# Contributing

First off, thank you for considering contributing to Looking Glass. It's
people like you that make Looking Glass such a great tool.

Following these guidelines helps to communicate that you respect the time of the
developers managing and developing this open source project. In return, they
should reciprocate that respect in addressing your issue, assessing changes, and
helping you finalize your pull requests.

Looking Glass is an open source project and we love to receive contributions
from our community — you! There are many ways to contribute, from writing
tutorials or blog posts, improving the documentation, submitting bug reports
and feature requests, or writing code which can be incorporated into Looking
Glass itself.

## Ground Rules

* Ensure cross-platform compatibility for every change that's accepted. Windows,
  Mac, Debian & Ubuntu Linux.
* Ensure that code that goes into core meets all requirements in this
  checklist: TBD
* Create issues for any major changes and enhancements that you wish to make.
  Discuss things transparently and get community feedback.
* Keep feature versions as small as possible, preferably one new feature per
  version.
* Be welcoming to newcomers and encourage diverse new contributors from all
  backgrounds. See
  the [Python Community Code of Conduct](https://www.python.org/psf/codeofconduct/)
  as a general example.

## Your First Contribution

Unsure where to begin contributing to Looking Glass? You can start by looking
through these beginner and help-wanted issues:

* Beginner issues - issues which should only require a few lines of code, and
  a test or two.
* Help wanted issues - issues which should be a bit more involved than beginner
  issues.
* Both issue lists are sorted by total number of comments. While not perfect,
  number of comments is a reasonable proxy for impact a given change will have.

### First contribution tutorials

* http://makeapullrequest.com/
* http://www.firsttimersonly.com/

> Working on your first Pull Request? You can learn how from this *free*
>
series, [How to Contribute to an Open Source Project on GitHub](https://egghead.io/series/how-to-contribute-to-an-open-source-project-on-github).

At this point, you're ready to make your changes. Feel free to ask for help;
everyone is a beginner at first.

If a maintainer asks you to "rebase" your PR, they're saying that a lot of code
has changed, and that you need to update your branch so it's easier to merge.

## Getting started

For something that is bigger than a one or two line fix:

1. Create your own fork of the code.
2. Do the changes in your fork.
3. If you like the change and think the project could use it:
    * Be sure you have followed the PSR-12 code style for the project.
    * Add tests to cover your new code
    * Make sure all tests pass.
    * Make sure PHPStan runs cleanly.

As a rule of thumb, changes are obvious fixes if they do not introduce any new
functionality or creative thinking. As long as the change does not affect
functionality, some likely examples include the following:

* Spelling / grammar fixes.
* Typo correction, white space and formatting changes.
* Comment clean up.
* Bug fixes that change default return values or error codes stored in
  constants.
* Adding logging messages or debugging output.
* Changes to ‘metadata’ files like .gitignore, build scripts, etc.

## How to report a bug

### Security issues

If you find a security vulnerability, do NOT open an issue. Email
cxjohnson@gmail.com instead.

In order to determine whether you are dealing with a security issue, ask
yourself these two questions:

* Can I access something that's not mine, or something I shouldn't have access
  to?
* Can I disable something for other people?
  If the answer to either of those two questions are "yes", then you're probably
  dealing with a security issue. Note that even if you answer "no" to both
  questions, you may still be dealing with a security issue, so if you're
  unsure, just email us.

### Bug reports

When filing an issue, make sure to answer these five questions:

1. What version of PHP are you using?
2. What version of Laravel are you using?
3. Which database are you using?
4. What operating system are you using?
5. What did you do?
6. What did you expect to see?
7. What did you see instead?

## How to suggest a feature or enhancement

If you find yourself wishing for a feature that doesn't exist in
Looking Glass, you are probably not alone. There are bound to be others out
there with similar needs. Open an issue on our issues list on
GitHub which describes the feature you would like to see, why you need it, and
how it should work.

## Code review process

The core team looks at Pull Requests on a regular basis.

## Community


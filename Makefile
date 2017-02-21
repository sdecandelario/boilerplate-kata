NAME = 'base-kata'

help: ## Prints this help.
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-20s\033[0m %s\n", $$1, $$2}'

build: ## Builds the docker container
	@docker build -t $(NAME) .

composer: ## Install composer dependencies
	@docker run --rm -v $(PWD):/app $(NAME) "composer install"

autoload: ## Dump autoload
	@docker run --rm -v $(PWD):/app $(NAME) "composer dump-autoload"

test: ## Run unit tests
	@docker run --rm -v $(PWD):/app $(NAME) "vendor/bin/phpunit --tap --colors='always'"
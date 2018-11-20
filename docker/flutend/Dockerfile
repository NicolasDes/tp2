FROM ruby:2.4-stretch as fluentd

WORKDIR /app

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        ruby
    && rm -rf /var/lib/apt/lists/*

RUN gem install fluentd

RUN gem install fluent-plugin-elasticsearch

RUN fluentd -c fluentd.conf

USER docker

CMD ["gem", "fluentd"]
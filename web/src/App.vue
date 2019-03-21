<template>
  <div  id="app" class="layout">
    <Layout>
      <Header class="header-menu" :style="{position: 'fixed', width: '100%'}">
        <Menu mode="horizontal" theme="dark" active-name="1">
          <div>
            <img class="layout-logo" src="../static/logo.png">
          </div>
          <div class="layout-nav">
            <MenuItem name="1">
              <Icon type="ios-navigate"></Icon>
              Item 1
            </MenuItem>
            <MenuItem name="2">
              <Icon type="ios-keypad"></Icon>
              Item 2
            </MenuItem>
            <MenuItem name="3">
              <Icon type="ios-analytics"></Icon>
              Item 3
            </MenuItem>
            <MenuItem name="4">
              <Icon type="ios-paper"></Icon>
              Item 4
            </MenuItem>
          </div>
        </Menu>
      </Header>

      <Content :style="{margin: '80px 15px 0', background: '#fff', minHeight: '500px'}">
        <router-view/>
        <BackTop :height="60" :bottom="15">
          <div>
            <div class="ivu-back-top-inner">
              <i class="ivu-icon ivu-icon-ios-arrow-up"></i>
            </div>
          </div>

        </BackTop>
      </Content>

      <Footer class="layout-footer-center">
        &copy;2019 小船出海教育科技（北京）有限公司  作业帮
      </Footer>
    </Layout>
  </div>
</template>

<script>
export default {
  name: 'App'
}
</script>

<style scoped>
    .layout{
        border: 1px solid #d7dde4;
        background: #f5f7f9;
        position: relative;
        border-radius: 4px;
        overflow: hidden;
    }
    .layout-logo{
        width: 100px;
        height: 30px;
        border-radius: 3px;
        float: left;
        position: relative;
        top: 15px;
        left: 20px;
    }
    .header-menu{
      z-index: 1000;
    }
    .layout-nav{
        width: 420px;
        margin: 0 auto;
        margin-right: 20px;
    }
    .layout-footer-center{
        text-align: center;
    }
</style>
